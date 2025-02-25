@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('campus.create') }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sub_campuses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="campus_name" class="form-label">{{ __('campus.campus_name') }}</label>
            <input type="text" name="campus_name" class="form-control" id="campus_name" value="{{ old('campus_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('campus.description') }}</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="enrolled_students" class="form-label">{{ __('campus.enrolled_students') }}</label>
            <input type="number" name="enrolled_students" class="form-control" id="enrolled_students" value="{{ old('enrolled_students') }}" required>
        </div>

        <div class="mb-3">
            <label for="teachers" class="form-label">{{ __('campus.teachers') }}</label>
            <input type="number" name="teachers" class="form-control" id="teachers" value="{{ old('teachers') }}" required>
        </div>

        <div class="mb-3">
            <label for="principal_in_charge" class="form-label">{{ __('campus.principal') }}</label>
            <input type="text" name="principal_in_charge" class="form-control" id="principal_in_charge" value="{{ old('principal_in_charge') }}" required>
        </div>

        <div class="mb-3">
            <label for="principal_picture" class="form-label">{{ __('campus.principal_picture') }}</label>
            <input type="file" name="principal_picture" class="form-control" id="principal_picture">
        </div>

        <div class="mb-3">
            <label for="campus_picture" class="form-label">{{ __('campus.campus_picture') }}</label>
            <input type="file" name="campus_picture" class="form-control" id="campus_picture">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">{{ __('campus.address') }}</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('campus.create') }}</button>
    </form>
</div>
@endsection
