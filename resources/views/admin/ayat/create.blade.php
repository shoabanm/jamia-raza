@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('ayat.create_title') }}</h1>

    <div class="card mt-4">
        <div class="card-header">{{ __('ayat.create_title') }}</div>
        <div class="card-body">
            <form action="{{ route('admin.ayat.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="content">{{ __('ayat.content') }}</label>
                    <textarea name="content" class="form-control" rows="4">{{ old('content') }}</textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="reference">{{ __('ayat.reference') }}</label>
                    <input type="text" name="reference" class="form-control" value="{{ old('reference') }}">
                    @error('reference')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="display_date">{{ __('ayat.display_date') }}</label>
                    <input type="date" name="display_date" class="form-control" value="{{ old('display_date') }}">
                    @error('display_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success mt-4">{{ __('ayat.save') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
