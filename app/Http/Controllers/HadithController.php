<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HadithRequest;
use App\Models\HadithOfTheDay;

class HadithController extends Controller
{
    public function index()
    {
        $hadiths = HadithOfTheDay::all();
        return view('admin.hadith.index', compact('hadiths'));
    }

    public function create()
    {
        return view('admin.hadith.create');
    }

    public function store(HadithRequest $request)
    {
        HadithOfTheDay::create($request->validated());

        return redirect()->route('admin.hadith.index')
                         ->with('status', __('hadith.hadith_created'));
    }

    public function edit(HadithOfTheDay $hadith)
    {
        return view('admin.hadith.edit', compact('hadith'));
    }

    public function update(HadithRequest $request, HadithOfTheDay $hadith)
    {
        $hadith->update($request->validated());

        return redirect()->route('admin.hadith.index')
                         ->with('status', __('hadith.hadith_updated'));
    }

    public function destroy(HadithOfTheDay $hadith)
    {
        $hadith->delete();

        return redirect()->route('admin.hadith.index')
                         ->with('status', __('hadith.hadith_deleted'));
    }

        // approve the ayat
        public function approveHadith(HadithOfTheDay $hadith)
        {
            if (!$hadith->approved) {
                $hadith->approved = true;
                $hadith->save();
                return back()->with('status', __('hadith.approved_success'));
            }
    
            return back()->with('status', __('hadith.already_approved'));
        }

}
