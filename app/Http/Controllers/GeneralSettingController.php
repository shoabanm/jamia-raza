<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingRequest;
use App\Models\GeneralSetting;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $settings = GeneralSetting::first();
        return view('admin.general_settings.index', compact('settings'));
    }

    public function edit()
    {
        $settings = GeneralSetting::first();
        return view('admin.general_settings.edit', compact('settings'));
    }

    public function update(GeneralSettingRequest $request)
    {
        $data = $request->validated();

        // Update or create settings
        GeneralSetting::updateOrCreate(['id' => 1], $data);

        return redirect()->route('admin.general-settings-app.index')->with('status', __('general_settings.updated'));
    }
}
