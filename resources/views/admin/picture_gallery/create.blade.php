@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('picture_gallery.add') }}</h1>

    <div class="card mt-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.picture_gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">{{ __('picture_gallery.title') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="picture">{{ __('fields.picture') }}</label>
                    <input type="file" class="form-control" id="picture" name="picture" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">{{ __('actions.save') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
