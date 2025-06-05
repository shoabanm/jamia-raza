@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('general_settings.settings') }}</h1>
    @can('approve')
    <a href="{{ route('admin.general-settings-app.edit') }}" class="btn btn-primary">{{ __('actions.edit') }}</a>
    @endcan
    <div class="card mt-4">
        <div class="card-header">{{ __('general_settings.settings') }}</div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">{{ __('general_settings.phone_number') }}: {{ $settings->phone_number }}</li>
                <li class="list-group-item">{{ __('general_settings.whatsapp_number') }}: {{ $settings->whatsapp_number }}</li>
                <li class="list-group-item">{{ __('general_settings.email') }}: {{ $settings->email }}</li>
                <li class="list-group-item">{{ __('general_settings.address') }}: {{ $settings->address }}</li>
                <li class="list-group-item">{{ __('general_settings.facebook_link') }}: {{ $settings->facebook_link }}</li>
                <li class="list-group-item">{{ __('general_settings.twitter_link') }}: {{ $settings->twitter_link }}</li>
                <li class="list-group-item">{{ __('general_settings.tiktok_link') }}: {{ $settings->tiktok_link }}</li>
                <li class="list-group-item">{{ __('general_settings.instagram_link') }}: {{ $settings->instagram_link }}</li>
                <li class="list-group-item">{{ __('general_settings.map_link') }}: {{ $settings->map_link }}</li>
                <li class="list-group-item">{{ __('general_settings.youtube_link') }}: {{ $settings->youtube_link }}</li>
                <li class="list-group-item">{{ __('general_settings.twitch_link') }}: {{ $settings->twitch_link }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
