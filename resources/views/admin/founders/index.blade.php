@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('founders.founders') }}</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>{{ __('founders.name') }}</th>
                <th>{{ __('founders.designation') }}</th>
                <th>{{ __('founders.picture') }}</th>
                <th>{{ __('founders.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($founders as $founder)
                <tr>
                    <td>{{ $founder->name }}</td>
                    <td>{{ $founder->designation }}</td>
                    <td><img src="{{ asset('storage/' . $founder->picture) }}" alt="{{ $founder->name }}" width="50"></td>
                    @can('approve')
                    <td>
                        <a href="{{ route('admin.founders.edit', $founder->id) }}" class="btn btn-warning">{{ __('founders.edit_founder') }}</a>
                    </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
