<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PictureGalleryRequest;
use App\Models\PictureGallery;
use Illuminate\Support\Facades\Storage;

class PictureGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = PictureGallery::paginate(5);
        // dd($galleries);
        return view('admin.picture_gallery.index', compact('galleries'));
    }
    
    public function create()
    {
        return view('admin.picture_gallery.create');
    }

    public function store(PictureGalleryRequest $request)
    {
        $data = $request->validated();

        // Handle picture upload to 'public/uploads/pictures'
        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/pictures', $fileName, 'public');
            $data['picture'] = $path;
        }

        PictureGallery::create($data);
        return redirect()->route('admin.picture_gallery.index')->with('status', __('picture_gallery.created'));
    }

    public function edit($id)
    {
        $gallery = PictureGallery::findOrFail($id);
        return view('admin.picture_gallery.edit', compact('gallery'));
    }

    public function update(PictureGalleryRequest $request, PictureGallery $gallery)
    {
        $data = $request->validated();

        // Handle picture upload
        if ($request->hasFile('picture')) {
            // Delete old picture if exists
            if ($gallery->picture) {
                Storage::disk('public')->delete($gallery->picture);
            }

            // Store the new picture
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/pictures', $fileName, 'public');
            $data['picture'] = $path;
        } else {
            // Keep the existing picture if not replaced
            $data['picture'] = $gallery->picture;
        }

        $gallery->update($data);
        return redirect()->route('admin.picture_gallery.index')->with('status', __('picture_gallery.updated'));
    }

    public function destroy($id)
    {
        $gallery = PictureGallery::findOrFail($id);
        // Delete picture from storage if it exists
        if ($gallery->picture) {
            Storage::disk('public')->delete($gallery->picture);
        }

        $gallery->delete();
        return redirect()->route('admin.picture_gallery.index')->with('status', __('picture_gallery.deleted'));
    }
}
