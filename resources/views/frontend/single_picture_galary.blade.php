@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    <div class="text-center container">
       <div class="row justify-content-center mb-4">
         <div class="col-12 col-lg-8">
           <div class="image-wrap">
             <img src="{{ asset('storage/' . $picture_galary->picture) }}" alt="{{ $picture_galary->title }}">
           </div>
         </div>
       </div>
       <div class="row justify-content-center">
         <div class="col-md-12 content-head">
           <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
             <strong> {{ $picture_galary->title }} </strong>
           </h1>
         </div>
       </div>
     </div>
</section>

@endsection
