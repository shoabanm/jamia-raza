@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('news.list') }}</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">{{ __('news.add') }}</a>

    <div class="card mt-4">
        <div class="card-header">{{ __('news.list') }}</div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('news.title') }}</th>
                        <th>{{ __('news.image') }}</th>
                        <th>{{ __('actions.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $news_item)
                    <tr>
                        <td>{{ $news_item->title }}</td>
                        <td><img src="{{ asset('storage/' . $news_item->image) }}" alt="{{ $news_item->title }}" width="50"></td>
                        <td>
                            <a href="{{ route('admin.news.edit', $news_item->id) }}" class="btn btn-warning">{{ __('actions.edit') }}</a>
                            <form action="{{ route('admin.news.destroy', $news_item) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{ __('actions.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
