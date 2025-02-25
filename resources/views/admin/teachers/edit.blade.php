@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('teacher.edit') }}</h1>

    <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('teacher.name') }}</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $teacher->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="education_details" class="form-label">{{ __('teacher.education_details') }}</label>
            <textarea name="education_details" class="form-control" id="education_details" rows="3" required>{{ old('education_details', $teacher->education_details) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">{{ __('teacher.age') }}</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ old('age', $teacher->age) }}" required>
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">{{ __('teacher.designation') }}</label>
            <input type="text" name="designation" class="form-control" id="designation" value="{{ old('designation', $teacher->designation) }}" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('teacher.picture') }}</label>
            <input type="file" name="picture" class="form-control" id="picture">
            <img src="{{ asset('storage/' . $teacher->picture) }}" alt="{{ $teacher->name }}" width="100" class="mt-2">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('teacher.update') }}</button>
    </form>
</div>
@endsection

