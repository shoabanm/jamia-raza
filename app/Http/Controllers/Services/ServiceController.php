<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ServiceFormRequest;
use App\Models\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceFormRequest $request)
    {
        $data = $request->validated();

        // Handle picture upload to 'public/uploads/services'
        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/services', $fileName, 'public');
            $data['picture'] = $path;
        }

        Service::create($data);
        return redirect()->route('admin.services.index')->with('status', __('messages.service_created'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(ServiceFormRequest $request, Service $service)
    {
        $data = $request->validated();
        
        if ($request->hasFile('picture')) {
            if ($service->picture) {
                Storage::disk('public')->delete($service->picture);
            }
    
            // Store the new picture
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/services', $fileName, 'public');
            $data['picture'] = $path;
        } else {
            $data['picture'] = $service->picture;
        }
    
        $service->save($data);

        return redirect()->route('admin.services.index')->with('status', __('messages.service_updated'));
    }

    public function destroy(Service $service)
    {
        if ($service->picture) {
            Storage::disk('public')->delete($service->picture);
        }
        $service->delete();

        return redirect()->route('admin.services.index')->with('status',  __('messages.service_deleted'));
    }
}
