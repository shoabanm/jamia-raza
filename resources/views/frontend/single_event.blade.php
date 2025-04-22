@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    <div class="text-center container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-8">
                <div class="image-wrap">
                    @php
                        $pictures = json_decode($event->pictures, true);
                    @endphp

                    @if (is_array($pictures))
                        @foreach ($pictures as $picture)
                            <img src="{{ asset('storage/' . $picture) }}" alt="{{ $event->title }}" class="img-fluid mb-3">
                        @endforeach
                    @else
                        <p>No pictures available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 content-head">
                <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
                    <strong>{{ $event->title }}</strong>
                </h1>
                <p class="mbr-text mbr-fonts-style mt-4 display-7">
                    {{ $event->description }}
                </p>
                <p class="mbr-text mbr-fonts-style mt-2 display-7">
                    <strong>Event Date:</strong> {{ $event->event_date->format('d M, Y') }}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
