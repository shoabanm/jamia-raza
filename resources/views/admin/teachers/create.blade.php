@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('teacher.create') }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('teacher.name') }}</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="education_details" class="form-label">{{ __('teacher.education_details') }}</label>
            <textarea name="education_details" class="form-control" id="education_details" rows="3" required>{{ old('education_details') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">{{ __('teacher.age') }}</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ old('age') }}" required>
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">{{ __('teacher.designation') }}</label>
            <input type="text" name="designation" class="form-control" id="designation" value="{{ old('designation') }}" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('teacher.picture') }}</label>
            <input type="file" name="picture" class="form-control" id="picture">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('teacher.create') }}</button>
    </form>
</div>
@endsection
