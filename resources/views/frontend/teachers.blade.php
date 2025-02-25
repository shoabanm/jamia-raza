@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    @foreach ($teachers as $teacher)
        
    <div class="text-center container">
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
             <strong> {{ $teacher->name }} </strong>
           </h1>
           <p class="mbr-text mbr-fonts-style mt-4 display-7">
            {{ $teacher->education_details }}
           </p>
         </div>
       </div>
     </div>

    @endforeach

</section>

@endsection
