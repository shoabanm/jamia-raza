<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(2);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request)
    {
        $data = $request->validated();

        // Handle multiple picture uploads
        if ($request->hasFile('pictures')) {
            $pictures = [];
            foreach ($request->file('pictures') ?? [] as $picture) {
                $fileName = time() . '_' . $picture->getClientOriginalName();
                $path = $picture->storeAs('uploads/events', $fileName, 'public');
                $pictures[] = $path;
            }
            $data['pictures'] = json_encode($pictures);
        }

        Event::create($data);
        return redirect()->route('admin.events.index')->with('status', __('events.created'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
        $data = $request->validated();

        if ($request->hasFile('pictures')) {
            // Delete old pictures if necessary
            if ($event->pictures) {
                foreach (json_decode($event->pictures) as $picture) {
                    Storage::disk('public')->delete($picture);
                }
            }

            // Store new pictures
            $pictures = [];
            foreach ($request->file('pictures') ?? [] as $picture) {
                $fileName = time() . '_' . $picture->getClientOriginalName();
                $path = $picture->storeAs('uploads/events', $fileName, 'public');
                $pictures[] = $path;
            }
            $data['pictures'] = json_encode($pictures);
        } else {
            $data['pictures'] = $event->pictures;
        }

        $event->update($data);
        return redirect()->route('admin.events.index')->with('status', __('events.updated'));
    }

    public function destroy(Event $event)
    {
        if ($event->pictures) {
            foreach (json_decode($event->pictures) ?? [] as $picture) {
                Storage::disk('public')->delete($picture);
            }
        }

        $event->delete();
        return redirect()->route('admin.events.index')->with('status', __('events.deleted'));
    }
}
