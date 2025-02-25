@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('general_settings.edit') }}</h1>

    <form action="{{ route('admin.general-settings-app.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="phone_number" class="form-label">{{ __('general_settings.phone_number') }}</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $settings->phone_number }}" required>
        </div>
        
        <div class="mb-3">
            <label for="whatsapp_number" class="form-label">{{ __('general_settings.whatsapp_number') }}</label>
            <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" value="{{ $settings->whatsapp_number }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('general_settings.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $settings->email }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">{{ __('general_settings.address') }}</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $settings->address }}" required>
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">{{ __('general_settings.facebook_link') }}</label>
            <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="{{ $settings->facebook_link }}">
        </div>

        <div class="mb-3">
            <label for="twitter_link" class="form-label">{{ __('general_settings.twitter_link') }}</label>
            <input type="url" class="form-control" id="twitter_link" name="twitter_link" value="{{ $settings->twitter_link }}">
        </div>

        <div class="mb-3">
            <label for="tiktok_link" class="form-label">{{ __('general_settings.tiktok_link') }}</label>
            <input type="url" class="form-control" id="tiktok_link" name="tiktok_link" value="{{ $settings->tiktok_link }}">
        </div>

        <div class="mb-3">
            <label for="instagram_link" class="form-label">{{ __('general_settings.instagram_link') }}</label>
            <input type="url" class="form-control" id="instagram_link" name="instagram_link" value="{{ $settings->instagram_link }}">
        </div>

        <div class="mb-3">
            <label for="map_link" class="form-label">{{ __('general_settings.map_link') }}</label>
            <input type="url" class="form-control" id="map_link" name="map_link" value="{{ $settings->map_link }}">
        </div>

        <div class="mb-3">
            <label for="youtube_link" class="form-label">{{ __('general_settings.youtube_link') }}</label>
            <input type="url" class="form-control" id="youtube_link" name="youtube_link" value="{{ $settings->youtube_link }}">
        </div>

        <div class="mb-3">
            <label for="twitch_link" class="form-label">{{ __('general_settings.twitch_link') }}</label>
            <input type="url" class="form-control" id="twitch_link" name="twitch_link" value="{{ $settings->twitch_link }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('actions.update') }}</button>
    </form>
</div>
@endsection
