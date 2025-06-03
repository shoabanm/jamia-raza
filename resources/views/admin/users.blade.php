{{-- resources/views/admin/users/index.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('All Users') }}</h1>
    <div class="card mb-4">
        <div class="card-body">
            <table id="users-table" class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Role') }}</th>
                        <th>{{ __('Registered At') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->getRoleNames()->first() ?? 'No Role') }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Laravel’s built-in paginaton links (in case JS is disabled) --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
