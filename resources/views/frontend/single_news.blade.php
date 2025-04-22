@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    <div class="text-center container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-8">
                <div class="image-wrap">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 content-head">
                <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
                    <strong>{{ $news->title }}</strong>
                </h1>
                <p class="mbr-text mbr-fonts-style mt-4 display-7">
                    {{ $news->short_description }}
                </p>

                <p class="mbr-text mbr-fonts-style mt-2 display-7">
                    <a href="{{ $news->youtube_link }}" target="_blank" class="btn btn-danger">
                        ▶️ Watch on YouTube
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
