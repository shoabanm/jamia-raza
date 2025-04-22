<section data-bs-version="5.1" class="header10 cid-uuaRroRxFA mbr-fullscreen" id="header10-b">
  
  
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrap col-12 col-md-6">
          <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
            <strong> {{ __('frontend.quran_kareem') }} </strong>
          </h1>
          
          <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
            {{ $latestAyat->content }}
            
            <br />
            {{ $latestAyat->reference }}
  
          </p>
          <div class="mbr-section-btn">
            {{-- <a class="btn btn-white display-7" href="#">{{ __('frontend.read_more') }} </a> --}}
            <a href="{{ route('frontend.single.ayat', $latestAyat->id ) }}" class="btn btn-white display-7 mt-3">{{ __('frontend.read_more') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>