@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ isset($event) ? __('events.edit') : __('events.create') }}</h1>

    <form action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($event))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="title">{{ __('fields.title') }}</label>
            <input type="text" name="title" class="form-control" value="{{ isset($event) ? $event->title : old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="event_date">{{ __('fields.event_date') }}</label>
            <input type="date" name="event_date" class="form-control" value="{{ isset($event) ? $event->event_date->format('Y-m-d') : old('event_date') }}" required>
        </div>

        <div class="form-group">
            <label for="description">{{ __('fields.description') }}</label>
            <textarea name="description" class="form-control" required>{{ isset($event) ? $event->description : old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="pictures">{{ __('fields.pictures') }}</label>
            <input type="file" name="pictures[]" class="form-control" multiple>
            @if(isset($event) && $event->pictures)
                <div class="mt-2">
                    @foreach(json_decode($event->pictures) as $picture)
                        <img src="{{ asset('storage/' . $picture) }}" width="50" alt="Event Image">
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success mt-3">{{ isset($event) ? __('actions.update') : __('actions.save') }}</button>
    </form>
</div>
@endsection
