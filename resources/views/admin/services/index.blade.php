@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('labels.services') }}</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">{{ __('labels.add_service') }}</a>
    <div class="card mt-4">
        <div class="card-header">{{ __('labels.services_list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('fields.short_name') }}</th>
                        <th>{{ __('fields.title') }}</th>
                        <th>{{ __('fields.enabled') }}</th>
                        <th>{{ __('actions.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->short_name }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->show ? __('labels.yes') : __('labels.no') }}</td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">{{ __('actions.edit') }}</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('actions.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
