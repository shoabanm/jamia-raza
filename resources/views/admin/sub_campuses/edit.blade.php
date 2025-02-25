@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('campus.edit') }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sub_campuses.update', $subCampus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="campus_name" class="form-label">{{ __('campus.campus_name') }}</label>
            <input type="text" name="campus_name" class="form-control" id="campus_name" value="{{ old('campus_name', $subCampus->campus_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('campus.description') }}</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description', $subCampus->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="enrolled_students" class="form-label">{{ __('campus.enrolled_students') }}</label>
            <input type="number" name="enrolled_students" class="form-control" id="enrolled_students" value="{{ old('enrolled_students', $subCampus->enrolled_students) }}" required>
        </div>

        <div class="mb-3">
            <label for="teachers" class="form-label">{{ __('campus.teachers') }}</label>
            <input type="number" name="teachers" class="form-control" id="teachers" value="{{ old('teachers', $subCampus->teachers) }}" required>
        </div>

        <div class="mb-3">
            <label for="principal_in_charge" class="form-label">{{ __('campus.principal') }}</label>
            <input type="text" name="principal_in_charge" class="form-control" id="principal_in_charge" value="{{ old('principal_in_charge', $subCampus->principal_in_charge) }}" required>
        </div>

        <div class="mb-3">
            <label for="principal_picture" class="form-label">{{ __('campus.principal_picture') }}</label>
            <input type="file" name="principal_picture" class="form-control" id="principal_picture">
            <img src="{{ asset('storage/' . $subCampus->principal_picture) }}" alt="{{ $subCampus->principal_in_charge }}" width="100" class="mt-3">
        </div>

        <div class="mb-3">
            <label for="campus_picture" class="form-label">{{ __('campus.campus_picture') }}</label>
            <input type="file" name="campus_picture" class="form-control" id="campus_picture">
            <img src="{{ asset('storage/' . $subCampus->campus_picture) }}" alt="{{ $subCampus->campus_name }}" width="100" class="mt-3">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">{{ __('campus.address') }}</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ old('address', $subCampus->address) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('campus.update') }}</button>
    </form>
</div>
@endsection
