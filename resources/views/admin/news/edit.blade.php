@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('news.edit') }}</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('news.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
        </div>
        <div class="mb-3">
            <label for="youtube_link" class="form-label">{{ __('news.youtube_link') }}</label>
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="{{ $news->youtube_link }}" required>
        </div>
        <div class="mb-3">
            <label for="short_description" class="form-label">{{ __('news.short_description') }}</label>
            <textarea class="form-control" id="short_description" name="short_description" required>{{ $news->short_description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">{{ __('news.image') }}</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" width="100">
        </div>
        <button type="submit" class="btn btn-primary">{{ __('actions.update') }}</button>
    </form>
</div>
@endsection
