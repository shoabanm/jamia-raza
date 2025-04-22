<?php

namespace App\Http\Controllers;

use App\Models\AyatOfTheDay;
use App\Http\Requests\AyatRequest;

class AyatController extends Controller
{
    public function index()
    {
        $ayats = AyatOfTheDay::all();
        return view('admin.ayat.index', compact('ayats'));
    }

    public function create()
    {
        return view('admin.ayat.create');
    }

    public function store(AyatRequest $request)
    {
        AyatOfTheDay::create($request->validated());
        return redirect()->route('admin.ayat.index')->with('status', __('ayat.ayat_created'));
    }

    public function edit(AyatOfTheDay $ayat)
    {
        return view('admin.ayat.edit', compact('ayat'));
    }

    public function update(AyatRequest $request, AyatOfTheDay $ayat)
    {
        $ayat->update($request->validated());
        return redirect()->route('admin.ayat.index')->with('status', __('ayat.ayat_updated'));
    }

    public function destroy(AyatOfTheDay $ayat)
    {
        $ayat->delete();
        return redirect()->route('admin.ayat.index')->with('status', __('ayat.ayat_deleted'));
    }

    // approve the ayat
    public function approveAyat(AyatOfTheDay $ayat)
    {
        if (!$ayat->approved) {
            $ayat->approved = true;
            $ayat->save();
            return back()->with('status', __('ayat.approved_success'));
        }

        return back()->with('status', __('ayat.already_approved'));
    }
}
