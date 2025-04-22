@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    <div class="text-center container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-lg-8">
                <div class="image-wrap mb-3">
                    <img src="{{ asset('storage/' . $teacher->picture) }}" alt="{{ $teacher->name }}" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 content-head text-start">
                <h1 class="mbr-section-title mbr-fonts-style mt-4 display-4">
                    <strong>Name:</strong> {{ $teacher->name }}
                </h1>

                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                    <strong>Designation:</strong> {{ $teacher->designation }}
                </p>

                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                    <strong>Education:</strong> {{ $teacher->education_details }}
                </p>

                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                    <strong>Age:</strong> {{ $teacher->age }} years
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
