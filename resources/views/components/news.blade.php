<section data-bs-version="5.1" class="content2 cid-uuaSbFJT5X" id="content2-i">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong> {{ __('frontend.islamic_news_headlines')}} </strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">{{ __('frontend.read_recent_news')}} </h5>
        </div>
        <div class="row mt-4">
            @forelse ($data as $news)
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset('storage/'. $news->image ) }}" alt="{{ $news->title }}" title="{{ $news->title }}">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Jashan Eid Milad Ul Nabi </a></h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                <strong>Muhammd Shoaban </strong><em> {{ $news->created_at }} </em></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                {{ $news->short_description }} 
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2">
                            <a href="{{ route('frontend.single.news', $news->id) }}" class="btn item-btn btn-primary display-7" target="_blank">{{ __('frontend.read_more') }}
                            </a>
                        </div>
                    </div>
                </div> 
            @empty
              No news to show   
            @endforelse
            
        </div>
    </div>
</section>