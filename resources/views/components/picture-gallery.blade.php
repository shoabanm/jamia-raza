
<section data-bs-version="5.1" class="gallery3 cid-uuaRI9NzYu" id="gallery03-f">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 content-head">
          <div class="mbr-section-head mb-5">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
              <strong>{{ __("frontend.picture_gallery") }}</strong>
            </h4>
            
          </div>
        </div>
      </div>
      <div class="row">
        @forelse ($data as $single_picture_gallery )
        <div class="item features-image mb-4 col-6 col-md-4 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <a href="{{ route('frontend.single.picture_gallery', $single_picture_gallery->id) }}">
              <img src="{{ asset('storage/'. $single_picture_gallery->picture ) }}" alt="{{ $single_picture_gallery->title }}" title="" data-slide-to="0" data-bs-slide-to="0">
              </a>
            </div>
            
          </div>
        </div>
        @empty
          No Picture Gallery yet.
        @endforelse
        
      </div>
    </div>
</section>