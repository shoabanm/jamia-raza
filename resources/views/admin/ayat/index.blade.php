@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('ayat.title') }}</h1>
    <a href="{{ route('admin.ayat.create') }}" class="btn btn-primary">{{ __('ayat.add_new') }}</a>

    <div class="card mt-4">
        <div class="card-header">{{ __('ayat.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('ayat.content') }}</th>
                        <th>{{ __('ayat.reference') }}</th>
                        <th>{{ __('ayat.display_date') }}</th>
                        <th>{{ __('ayat.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ayats as $ayat)
                        <tr>
                            <td>{{ $ayat->content }}</td>
                            <td>{{ $ayat->reference }}</td>
                            <td>{{ $ayat->display_date }}</td>
                            <td>
                                <a href="{{ route('admin.ayat.edit', $ayat->id) }}" class="btn btn-warning">{{ __('ayat.edit') }}</a>
                                <form action="{{ route('admin.ayat.destroy', $ayat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('ayat.delete') }}</button>
                                </form>
                                @can('approve')
                                    @unless($ayat->approved)
                                        <form action="{{ route('admin.ayat.approve', $ayat) }}" method="POST" class="d-inline">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-success">{{ __('ayat.approve') }}</button>
                                        </form>
                                    @endunless
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
