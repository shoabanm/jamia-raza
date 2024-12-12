<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\DepartmentValidationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Show the list of departments
    public function index()
    {
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    // Show the form for creating a new department
    public function create()
    {
        return view('admin.departments.create');
    }

    // Store a newly created department in the database
    public function store(DepartmentValidationRequest $request)
    {
        $data = $request->validated();

        // Handle picture upload to 'public/uploads/departments'
        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/departments', $fileName, 'public');
            $data['picture'] = $path;
        }

        Department::create($data);
        return redirect()->route('admin.departments.index')->with('status', __('messages.department_created'));
    }

    // Show the form for editing the specified department
    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'));
    }

    // Update the specified department in the database
    public function update(DepartmentValidationRequest $request, Department $department)
    {
        $data = $request->validated();
    
        // Handle picture upload if a new file is uploaded
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($department->picture) {
                Storage::disk('public')->delete($department->picture);
            }
    
            // Store the new picture
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/departments', $fileName, 'public');
            $data['picture'] = $path;
        } else {
            // If no new file is uploaded, retain the old picture
            $data['picture'] = $department->picture;
        }
    
        $department->update($data);
        return redirect()->route('admin.departments.index')->with('status', __('messages.department_updated'));
    }
    


    // Delete the specified department
    public function destroy(Department $department)
    {
        // Delete the picture if it exists
        if ($department->picture) {
            Storage::disk('public')->delete($department->picture);
        }

        $department->delete();
        return redirect()->route('admin.departments.index')->with('status', __('messages.department_deleted'));
    }
}
