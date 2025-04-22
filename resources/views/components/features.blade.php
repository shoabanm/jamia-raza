
<section data-bs-version="5.1" class="features1 cid-uuaRAMzqit" id="features01-e">

    <div class="container-fluid">
      <div class="row justify-content-center mb-5">
        <div class="col-12 content-head">
          <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong> {{ __('frontend.features') }} </strong>
          </h3>
          
        </div>
      </div>
      <div class="row justify-content-center">
        @forelse ($departments as $department )
        <div class="col-sm-6 col-md-12 mb-3 mb-lg-0 col-lg-3">
          <div class="card-wrap card1">
            <div class="image-wrap">
              <img src="{{ asset('storage/' . $department->picture) }}" alt="{{ $department->title }}">
              <div class="social-row display-7">
                
              </div>
            </div>
            <div class="content-wrap">
              <h5 class="mbr-card-title card-title1 mbr-fonts-style align-left mb-2 display-5">
                <strong> {{ $department->short_name }} </strong>
              </h5>
              
              <p class="card-text1 mbr-fonts-style align-left mb-3 display-7">
                {{ $department->description }}
              </p>
              <div class="mbr-section-btn align-left content-footer">
                <a class="btn article-btn btn-info display-7" href="{{ route('frontend.single.department', $department->id) }}"><strong>{{ __('frontend.read_more') }}</strong></a>
              </div>
            </div>
          </div>
        </div>

        @empty
          No Dpartment to show 
        @endforelse
       
      </div>
    </div>
  </section>