@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    @foreach ($teachers as $teacher)
    <div class="text-center container mb-5">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-8">
                <div class="image-wrap">
                        <img src="{{ asset('storage/' . $teacher->picture) }}" alt="{{ $teacher->name }}">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 content-head">
                <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
                    <strong>
                            {{ $teacher->name }}
                    </strong>
                </h1>
                <p class="mbr-text mbr-fonts-style mt-4 display-7">
                    {{ $teacher->education_details }}
                </p>
                <div class="row-links mt-4">
                  <a class="btn article-btn btn-info display-7" href="{{ route('frontend.single.teacher', $teacher->id) }}"><strong>{{ __('frontend.read_more') }}</strong></a>
             </div>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection
