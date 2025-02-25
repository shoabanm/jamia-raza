<?php

namespace App\Http\Controllers;

use App\Models\SubCampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCampusController extends Controller
{
    public function index()
    {
        $subCampuses = SubCampus::all();
        return view('admin.sub_campuses.index', compact('subCampuses'));
    }

    public function create()
    {
        return view('admin.sub_campuses.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'campus_name' => 'required|string|max:255',
            'description' => 'required|string',
            'enrolled_students' => 'required|integer',
            'teachers' => 'required|integer',
            'principal_in_charge' => 'required|string|max:255',
            'principal_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'campus_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string|max:255',
        ]);

        $data['principal_picture'] = $request->file('principal_picture')->store('uploads/principal_pictures', 'public');
        $data['campus_picture'] = $request->file('campus_picture')->store('uploads/campus_pictures', 'public');

        SubCampus::create($data);
        return redirect()->route('admin.sub_campuses.index')->with('status', __('campus.success_create'));
    }

    public function edit(SubCampus $subCampus)
    {
        return view('admin.sub_campuses.edit', compact('subCampus'));
    }

    public function update(Request $request, SubCampus $subCampus)
    {
        $data = $request->validate([
            'campus_name' => 'required|string|max:255',
            'description' => 'required|string',
            'enrolled_students' => 'required|integer',
            'teachers' => 'required|integer',
            'principal_in_charge' => 'required|string|max:255',
            'principal_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'campus_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string|max:255',
        ]);

        if ($request->hasFile('principal_picture')) {
            Storage::disk('public')->delete($subCampus->principal_picture);
            $data['principal_picture'] = $request->file('principal_picture')->store('uploads/principal_pictures', 'public');
        }

        if ($request->hasFile('campus_picture')) {
            Storage::disk('public')->delete($subCampus->campus_picture);
            $data['campus_picture'] = $request->file('campus_picture')->store('uploads/campus_pictures', 'public');
        }

        $subCampus->update($data);
        return redirect()->route('admin.sub_campuses.index')->with('status', __('campus.success_update'));
    }

    public function destroy(SubCampus $subCampus)
    {
        Storage::disk('public')->delete($subCampus->principal_picture);
        Storage::disk('public')->delete($subCampus->campus_picture);
        $subCampus->delete();
        return redirect()->route('admin.sub_campuses.index')->with('status', __('campus.success_delete'));
    }
}
