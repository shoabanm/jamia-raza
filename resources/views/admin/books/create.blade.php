@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('books.add_new_book') }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="book_name" class="form-label">{{ __('books.book_name') }}</label>
            <input type="text" name="book_name" class="form-control" id="book_name" value="{{ old('book_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="author_name" class="form-label">{{ __('books.author_name') }}</label>
            <input type="text" name="author_name" class="form-control" id="author_name" value="{{ old('author_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">{{ __('books.pages') }}</label>
            <input type="number" name="pages" class="form-control" id="pages" value="{{ old('pages') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('books.description') }}</label>
            <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('books.picture') }}</label>
            <input type="file" name="picture" class="form-control" id="picture">
        </div>

        <div class="mb-3">
            <label for="external_link" class="form-label">{{ __('books.external_link') }}</label>
            <input type="url" name="external_link" class="form-control" id="external_link" value="{{ old('external_link') }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('books.add_new_book') }}</button>
    </form>
</div>
@endsection
