<section data-bs-version="5.1" class="header16 cid-uuaRwjnsNh" id="header16-d">

    <div class="text-center container">
      <div class="row justify-content-center mb-4">
        <div class="col-12 col-lg-8">
          <div class="image-wrap">
            <img src="{{ asset('assets/frontend/images/khulafa.jpg') }}" alt="Mobirise Website Builder">
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12 content-head">
          <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
            <strong> {{ __('frontend.khulafa') }} </strong>
          </h1>
          <p class="mbr-text mbr-fonts-style mt-4 display-7">
            {{ $latestSaying->content }} 
            <br />
            {{ $latestSaying->reference }}
          </p>
          <div class="row-links mt-4">
            <a href="{{ route('frontend.single.saying', $latestSaying->id ) }}" class="btn btn-white display-7 mt-3">{{ __('frontend.read_more') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>