@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('labels.edit_service') }}</h1>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="short_name" class="form-label">{{ __('fields.short_name') }}</label>
            <input type="text" class="form-control" id="short_name" name="short_name" value="{{ old('short_name', $service->short_name) }}" required>
            @error('short_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('fields.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $service->title) }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('fields.description') }}</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="show" class="form-label">{{ __('fields.enabled') }}</label>
            <select name="show" class="form-control" required>
                <option value="1" {{ old('show', $service->show ?? 1) == 1 ? 'selected' : '' }}>{{ __('labels.yes') }}</option>
                <option value="0" {{ old('show', $service->show ?? 0) == 0 ? 'selected' : '' }}>{{ __('labels.no') }}</option>
            </select>
            @error('show') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('fields.picture') }}</label>
            @if ($service->picture)
                <br />
                <img src="{{ asset('storage/' . $service->picture) }}" alt="{{ $service->title }}" class="img-fluid mt-2 mb-2" style="height: 40px; width: 40px;">
            @endif
            <input type="file" class="form-control" id="picture" name="picture" @if(!$service->picture) required @endif>
            @error('picture') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('actions.update') }}</button>
    </form>
</div>
@endsection
