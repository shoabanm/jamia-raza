@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('picture_gallery.title') }}</h1>
    <a href="{{ route('admin.picture_gallery.create') }}" class="btn btn-primary">{{ __('picture_gallery.add') }}</a>

    <div class="card mt-4">
        <div class="card-header">{{ __('picture_gallery.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('picture_gallery.title') }}</th>
                        <th>{{ __('fields.picture') }}</th>
                        <th>{{ __('actions.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                    {{-- @php dd($gallery) @endphp --}}
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td><img src="{{ asset('storage/' . $gallery->picture) }}" alt="{{ $gallery->title }}" width="50"></td>
                        <td>
                            <a href="{{ route('admin.picture_gallery.edit', $gallery->id) }}" class="btn btn-warning">{{ __('actions.edit') }}</a>
                            <form action="{{ route('admin.picture_gallery.destroy', $gallery) }}" method="POST" class="d-inline">
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
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
