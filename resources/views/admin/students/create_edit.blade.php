@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ isset($student) ? __('students.edit_title') : __('students.create_title') }}</h1>

    <form action="{{ isset($student) ? route('admin.students.update', $student) : route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($student))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="first_name" class="form-label">{{ __('students.first_name') }}</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $student->first_name ?? '') }}" required>
            @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">{{ __('students.last_name') }}</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $student->last_name ?? '') }}" required>
            @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="father_name" class="form-label">{{ __('students.father_name') }}</label>
            <input type="text" class="form-control" id="father_name" name="father_name" value="{{ old('father_name', $student->father_name ?? '') }}" required>
            @error('father_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">{{ __('students.dob') }}</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $student->dob ?? '') }}" required>
            @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">{{ __('students.address') }}</label>
            <textarea class="form-control" id="address" name="address" required>{{ old('address', $student->address ?? '') }}</textarea>
            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="department_id" class="form-label">{{ __('students.department') }}</label>
            <select name="department_id" id="department_id" class="form-select">
                @foreach($departments as $department)
                <option value="{{ $department->id }}" {{ old('department_id', $student->department_id ?? '') == $department->id ? 'selected' : '' }}>
                    {{ $department->title }}
                </option>
                @endforeach
            </select>
            @error('department_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('students.picture') }}</label>
            <input type="file" class="form-control" id="picture" name="picture">
            @if(isset($student) && $student->picture)
                <img src="{{ asset('storage/' . $student->picture) }}" class="img-thumbnail mt-2" width="100">
            @endif
            @error('picture') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('students.description') }}</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $student->description ?? '') }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="enrolled" class="form-label">{{ __('students.enrolled') }}</label>
            <select name="enrolled" id="enrolled" class="form-select">
                <option value="1" {{ old('enrolled', $student->enrolled ?? '') == 1 ? 'selected' : '' }}>{{ __('Yes') }}</option>
                <option value="0" {{ old('enrolled', $student->enrolled ?? '') == 0 ? 'selected' : '' }}>{{ __('No') }}</option>
            </select>
            @error('enrolled') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="passed_out" class="form-label">{{ __('students.passed_out') }}</label>
            <select name="passed_out" id="passed_out" class="form-select">
                <option value="1" {{ old('passed_out', $student->passed_out ?? '') == 1 ? 'selected' : '' }}>{{ __('Yes') }}</option>
                <option value="0" {{ old('passed_out', $student->passed_out ?? '') == 0 ? 'selected' : '' }}>{{ __('No') }}</option>
            </select>
            @error('passed_out') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($student) ? __('students.update') : __('students.save') }}</button>
    </form>
</div>
@endsection
