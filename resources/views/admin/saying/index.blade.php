@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('saying.title') }}</h1>
    @can("add")
    <a href="{{ route('admin.saying.create') }}" class="btn btn-primary">{{ __('saying.add_new') }}</a>
    @endcan
    <div class="card mt-4">
        <div class="card-header">{{ __('saying.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('saying.content') }}</th>
                        <th>{{ __('saying.reference') }}</th>
                        <th>{{ __('saying.display_date') }}</th>
                        <th>{{ __('saying.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sayings as $saying)
                        <tr>
                            <td>{{ $saying->content }}</td>
                            <td>{{ $saying->reference }}</td>
                            <td>{{ $saying->display_date }}</td>
                            @can('edit')
                            <td>
                                <a href="{{ route('admin.saying.edit', $saying->id) }}" class="btn btn-warning">{{ __('saying.edit') }}</a>
                                <form action="{{ route('admin.saying.destroy', $saying->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('saying.delete') }}</button>
                                </form>
                                @can('approve')
                                    @unless($saying->approved)
                                        <form action="{{ route('admin.saying.approve', $saying) }}" method="POST" class="d-inline">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-success">{{ __('saying.approve') }}</button>
                                        </form>
                                    @endunless
                                @endcan
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $sayings->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
