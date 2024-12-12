@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('labels.edit_department') }}</h1>
    <form action="{{ route('admin.departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="short_name" class="form-label">{{ __('fields.short_name') }}</label>
            <input type="text" class="form-control" id="short_name" name="short_name" value="{{ old('short_name', $department->short_name) }}" required>
            @error('short_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('fields.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $department->title) }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('fields.description') }}</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $department->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('fields.picture') }}</label>
            @if ($department->picture)
                <br />
                <img src="{{ asset('storage/' . $department->picture) }}" alt="{{ $department->title }}" class="img-fluid mt-2 mb-2" style="height: 40px; width: 40px;">
            @endif
            <input type="file" class="form-control" id="picture" name="picture" @if(!$department->picture) required @endif>
            @error('picture') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('actions.update') }}</button>
    </form>
</div>
@endsection
