<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'education_details' => 'required|string',
            'age' => 'required|integer',
            'designation' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('uploads/teachers', 'public');
        }

        Teacher::create($data);
        return redirect()->route('admin.teachers.index')->with('status', __('teacher.created'));
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'education_details' => 'required|string',
            'age' => 'required|integer',
            'designation' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            Storage::disk('public')->delete($teacher->picture);
            $data['picture'] = $request->file('picture')->store('uploads/teachers', 'public');
        }

        $teacher->update($data);
        return redirect()->route('admin.teachers.index')->with('status', __('teacher.updated'));
    }

    public function destroy(Teacher $teacher)
    {
        Storage::disk('public')->delete($teacher->picture);
        $teacher->delete();
        return redirect()->route('admin.teachers.index')->with('status', __('teacher.deleted'));
    }
}

