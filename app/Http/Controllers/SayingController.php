<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SayingRequest;
use App\Models\SayingOfTheDay;

class SayingController extends Controller
{
    public function index()
    {
        $sayings = SayingOfTheDay::all();
        return view('admin.saying.index', compact('sayings'));
    }

    public function create()
    {
        return view('admin.saying.create');
    }

    public function store(SayingRequest $request)
    {
        SayingOfTheDay::create($request->validated());

        return redirect()->route('admin.saying.index')
                         ->with('status', __('saying.saying_created'));
    }

    public function edit(SayingOfTheDay $saying)
    {
        return view('admin.saying.edit', compact('saying'));
    }

    public function update(SayingRequest $request, SayingOfTheDay $saying)
    {
        $saying->update($request->validated());

        return redirect()->route('admin.saying.index')
                         ->with('status', __('saying.saying_updated'));
    }

    public function destroy(SayingOfTheDay $saying)
    {
        $saying->delete();

        return redirect()->route('admin.saying.index')
                         ->with('status', __('saying.saying_deleted'));
    }
}