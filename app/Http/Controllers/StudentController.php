<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Department;
use App\Http\Requests\StudentRequest; // Import the custom request
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('department')->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.students.create_edit', compact('departments'));
    }

    public function store(StudentRequest $request) // Use the custom request
    {
        $data = $request->validated();

        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/students', $fileName, 'public');
            $data['picture'] = $path;
        }

        Student::create($data);

        return redirect()->route('admin.students.index')->with('success', __('students.student_created'));
    }

    public function edit(Student $student)
    {
        $departments = Department::all();
        return view('admin.students.create_edit', compact('student', 'departments'));
    }

    public function update(StudentRequest $request, Student $student) // Use the custom request
    {
        $data = $request->validated();
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($student->picture) {
                Storage::disk('public')->delete($student->picture);
            }
    
            // Store the new picture
                $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
                $path = $request->file('picture')->storeAs('uploads/students', $fileName, 'public');
                $data['picture'] = $path;
            } else {
                // If no new file is uploaded, retain the old picture
                $data['picture'] = $student->picture;
            }

        $student->update($data);

        return redirect()->route('admin.students.index')->with('success', __('students.student_updated'));
    }

    public function destroy(Student $student)
    {
        if ($student->picture) {
            Storage::disk('public')->delete($student->picture);
        }
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', __('students.student_deleted'));
    }
}
