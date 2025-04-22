
<section data-bs-version="5.1" class="slider4 mbr-embla cid-uuaRWPMiJ5" id="slider04-g">
    

    
    
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
			<div class="col-12 content-head">
				<h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong>{{ __('frontend.our_events')}} </strong>
          </h3>
          <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">
            {{ __('frontend.islamic_excellence')}}
				</h5>
			</div>
		</div>
        <div class="row">
            <div class="col-12">
                <div class="embla position-relative" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play-interval="5" data-draggable="true">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            @forelse ($data as $event)
                                @php
                                    $pictures = json_decode($event->pictures, true); // decode as associative array
                                @endphp

                                @if (!empty($pictures))
                                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                        <a href="{{ route('frontend.single.event', $event->id) }}">
                                            <div class="slide-content">
                                                <div class="item-img">
                                                    <div class="item-wrapper">
                                                        <img src="{{ asset('storage/' . $pictures[0]) }}" alt="{{ $event->title }}" title="{{ $event->title }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @empty
                                No event to show
                            @endforelse
                        </div>
                    </div>
                    <button class="embla__button embla__button--prev">
                        <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Previous</span>
                    </button>
                    <button class="embla__button embla__button--next">
                        <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>