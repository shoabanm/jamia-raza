@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('founders.edit_founder') }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.founders.update', $founder->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('founders.name') }}</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $founder->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">{{ __('founders.designation') }}</label>
            <input type="text" name="designation" class="form-control" id="designation" value="{{ old('designation', $founder->designation) }}" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">{{ __('founders.picture') }}</label>
            <input type="file" name="picture" class="form-control" id="picture">
            <img src="{{ asset('storage/' . $founder->picture) }}" alt="{{ $founder->name }}" width="100" class="mt-3">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('founders.update_founder') }}</button>
    </form>
</div>
@endsection
