@extends('layouts.main')

@section('content')

<section class="header16 cid-uuaRskCZAa" id="header16-c">
    @foreach ($books as $book)
        
    <div class="text-center container">
       <div class="row justify-content-center mb-4">
         <div class="col-12 col-lg-8">
           <div class="image-wrap">
             <img src="{{ asset('storage/' . $book->picture) }}" alt="{{ $book->book_name }}">
           </div>
         </div>
       </div>
       <div class="row justify-content-center">
         <div class="col-md-12 content-head">
           <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
             <strong> {{ $book->book_name }} </strong>
           </h1>
           <p class="mbr-text mbr-fonts-style mt-4 display-7">
            {{ $book->description }}
           </p>
           <div class="row-links mt-4">
                <a class="btn article-btn btn-info display-7" href="{{ $book->external_link }}"><strong>{{ __('frontend.read_more') }}</strong></a>
           </div>
         </div>
       </div>
     </div>

    @endforeach

</section>

@endsection
