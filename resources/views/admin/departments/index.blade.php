@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('labels.departments') }}</h1>
    <a href="{{ route('admin.departments.create') }}" class="btn btn-primary">{{ __('labels.add_department') }}</a>
    <div class="card mt-4">
        <div class="card-header">{{ __('labels.department_list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('fields.short_name') }}</th>
                        <th>{{ __('fields.title') }}</th>
                        <th>{{ __('actions.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $department->short_name }}</td>
                            <td>{{ $department->title }}</td>
                            <td>
                                <a href="{{ route('admin.departments.edit', $department->id) }}" class="btn btn-warning">{{ __('actions.edit') }}</a>
                                <form action="{{ route('admin.departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('actions.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $departments->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
