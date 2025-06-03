@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('teacher.index') }}</h1>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <!-- Add Teacher Button -->
    <div class="mb-3">
        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">{{ __('teacher.create') }}</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>{{ __('teacher.name') }}</th>
                <th>{{ __('teacher.education_details') }}</th>
                <th>{{ __('teacher.age') }}</th>
                <th>{{ __('teacher.designation') }}</th>
                <th>{{ __('teacher.picture') }}</th>
                <th>{{ __('teacher.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->education_details }}</td>
                    <td>{{ $teacher->age }}</td>
                    <td>{{ $teacher->designation }}</td>
                    <td><img src="{{ asset('storage/' . $teacher->picture) }}" alt="{{ $teacher->name }}" width="50"></td>
                    <td>
                        <a href="{{ route('admin.teachers.edit', $teacher->id) }}" class="btn btn-warning">{{ __('teacher.edit') }}</a>
                        <form action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('teacher.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $teachers->links() }}
    </div>
</div>
@endsection
