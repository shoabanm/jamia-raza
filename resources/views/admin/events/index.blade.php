@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('events.title') }}</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">{{ __('events.add') }}</a>

    <div class="card mt-4">
        <div class="card-header">{{ __('events.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('events.title') }}</th>
                        <th>{{ __('fields.event_date') }}</th>
                        <th>{{ __('fields.description') }}</th>
                        <th>{{ __('fields.pictures') }}</th>
                        <th>{{ __('actions.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->event_date->format('d M Y') }}</td>
                        <td>{{ $event->description }}</td>
                        <td>
                            @if($event->pictures)
                                @foreach(json_decode($event->pictures) ?? [] as $picture)
                                    <img src="{{ asset('storage/' . $picture) }}" width="50" alt="Event Image">
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">{{ __('actions.edit') }}</a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{ __('actions.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
