@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('hadith.title') }}</h1>
    <a href="{{ route('admin.hadith.create') }}" class="btn btn-primary">{{ __('hadith.add_new') }}</a>

    <div class="card mt-4">
        <div class="card-header">{{ __('hadith.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('hadith.content') }}</th>
                        <th>{{ __('hadith.reference') }}</th>
                        <th>{{ __('hadith.display_date') }}</th>
                        <th>{{ __('hadith.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hadiths as $hadith)
                        <tr>
                            <td>{{ $hadith->content }}</td>
                            <td>{{ $hadith->reference }}</td>
                            <td>{{ $hadith->display_date }}</td>
                            <td>
                                <a href="{{ route('admin.hadith.edit', $hadith->id) }}" class="btn btn-warning">{{ __('hadith.edit') }}</a>
                                <form action="{{ route('admin.hadith.destroy', $hadith->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('hadith.delete') }}</button>
                                </form>
                                @can('approve')
                                    @unless($hadith->approved)
                                        <form action="{{ route('admin.hadith.approve', $hadith) }}" method="POST" class="d-inline">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-success">{{ __('hadith.approve') }}</button>
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
