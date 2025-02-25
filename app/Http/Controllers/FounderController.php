<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FounderController extends Controller
{
    public function index()
    {
        $founders = Founder::all();
        return view('admin.founders.index', compact('founders'));
    }

    public function edit(Founder $founder)
    {
        return view('admin.founders.edit', compact('founder'));
    }

    public function update(Request $request, Founder $founder)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            if ($founder->picture) {
                Storage::disk('public')->delete($founder->picture);
            }
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/founders', $fileName, 'public');
            $data['picture'] = $path;
        }

        $founder->update($data);
        return redirect()->route('admin.founders.index')->with('status', __('founders.update_success'));
    }

    public function destroy(Founder $founder)
    {
        if ($founder->picture) {
            Storage::disk('public')->delete($founder->picture);
        }
        $founder->delete();
        return redirect()->route('admin.founders.index')->with('status', __('founders.delete_success'));
    }
}
