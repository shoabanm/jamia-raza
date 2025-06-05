@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('campus.list') }}</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @can('add')
    <a href="{{ route('admin.sub_campuses.create') }}" class="btn btn-primary">{{ __('campus.create') }}</a>
    @endcan
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>{{ __('campus.campus_name') }}</th>
                <th>{{ __('campus.enrolled_students') }}</th>
                <th>{{ __('campus.teachers') }}</th>
                <th>{{ __('campus.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subCampuses as $subCampus)
                <tr>
                    <td>{{ $subCampus->campus_name }}</td>
                    <td>{{ $subCampus->enrolled_students }}</td>
                    <td>{{ $subCampus->teachers }}</td>
                    @can('edit')
                    <td>
                        <a href="{{ route('admin.sub_campuses.edit', $subCampus->id) }}" class="btn btn-warning">{{ __('campus.edit') }}</a>
                        <form action="{{ route('admin.sub_campuses.destroy', $subCampus->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('campus.delete') }}</button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $subCampuses->links() }}
    </div>
</div>
@endsection
