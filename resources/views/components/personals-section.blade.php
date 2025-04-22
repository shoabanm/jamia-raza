<section data-bs-version="5.1" class="people03 cid-uuaS42NceJ" id="people03-h">
	
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong> {{ __('frontend.ba_faizan_a_nazr') }} </strong>
					</h4>
					
				</div>
			</div>
		</div>
		<div class="row">
			@forelse ($founders as $founder )
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="{{ asset('storage/' . $founder->picture) }}" alt="Mobirise Website Builder" title="">
					</div>
					<div class="item-content align-left">
						<h5 class="item-title mbr-fonts-style mb-3 display-7">
							{{ $founder->designation }}
						</h5>
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong> {{ $founder->name }} </strong>
						</h6>
						
					</div>
					
				</div>
			</div>
			@empty
				<p> No item to show </p>
			@endforelse
    		
			
		</div>
	</div>
</section>