@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('news.create') }}</h1>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('news.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="youtube_link" class="form-label">{{ __('news.youtube_link') }}</label>
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" required>
        </div>
        <div class="mb-3">
            <label for="short_description" class="form-label">{{ __('news.short_description') }}</label>
            <textarea class="form-control" id="short_description" name="short_description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('news.image') }}</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('actions.save') }}</button>
    </form>
</div>
@endsection
