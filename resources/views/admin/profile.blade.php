{{-- resources/views/profile.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Update Profile</h2>

    {{-- Display success message if present --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" novalidate>
        @csrf

        {{-- Name field --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $user->name) }}"
                required
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email field --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email', $user->email) }}"
                required
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password field (optional) --}}
        <div class="mb-3">
            <label for="password" class="form-label">
                New Password <small class="text-muted">(leave blank to keep current)</small>
            </label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                autocomplete="new-password"
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password confirmation --}}
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">
                Confirm New Password
            </label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="form-control"
                autocomplete="new-password"
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Update Profile
        </button>
    </form>
</div>
@endsection
