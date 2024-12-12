<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>{{ __('frontend.title')}}</title>
  <link rel="stylesheet" href="{{ asset('assets/frontend/web/assets/mobirise-icons2/mobirise2.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/theme/css/style.css') }}">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="{{ asset('assets/frontend/mobirise/css/mbr-additional.css') }}"><link rel="stylesheet" href="{{ asset('assets/frontend/mobirise/css/mbr-additional.css') }}" type="text/css">

  
  <style>
    .donate-btn {
      background-color: red;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }
  
    .donate-btn:hover {
      background-color: darkred;
    }
  </style>
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu3 cid-uuaQzWYgQF" once="menu" id="menu03-3">
	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo" style="font-size: 30px;">
					<a href="/" style="color:red !important;">
            {{ __('frontend.title')}}
					</a>
				</span>
				
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
          <li class="nav-item dropdown">
            <a class="nav-link link text-black display-4 dropdown-toggle" href="#" id="digitalLibraryDropdown" role="button" data-toggle="dropdown" aria-expanded="false">{{ __('frontend.digital_library') }}</a>
            <div class="dropdown-menu" aria-labelledby="digitalLibraryDropdown">
              <a class="dropdown-item" href="#">{{ __('frontend.ebook') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.journal') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.articles') }}</a>
            </div>
          </li>
      
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="#">{{ __('frontend.teachers') }}</a>
          </li>
      
          <li class="nav-item dropdown">
            <a class="nav-link link text-black display-4 dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-expanded="false">{{ __('frontend.services') }}</a>
            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
              <a class="dropdown-item" href="#">{{ __('frontend.hifz') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.tajweed') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.fiqa') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.dars_a_nizami') }}</a>
            </div>
          </li>
        </ul>
      
        <div class="icons-menu">
      
          <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
      
          <!-- Additional Menus with Consistent Styling -->
          <li class="nav-item dropdown" style="margin-right: 10px;">
            <a class="nav-link link text-black display-4 dropdown-toggle" href="#" id="menu1Dropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              {{ __('frontend.languages') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="menu1Dropdown">
              <a class="dropdown-item" href="#">{{ __('frontend.english') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.urdu') }}</a>
              <a class="dropdown-item" href="#">{{ __('frontend.arabic') }}</a>
            </div>
          </li>
      
        
          <li class="nav-item d-flex">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" style="white-space: nowrap;" class="nav-link link text-black display-4">{{ __('frontend.home') }}</a>
                    @else
                        <a href="{{ route('login') }}" style="white-space: nowrap;" class="nav-link link text-black display-4">{{ __('frontend.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="white-space: nowrap;" class="ml-4 nav-link link text-black display-4">{{ __('frontend.register') }}</a>
                        @endif
                    @endauth
            @endif
          </li>

        </ul>

      </div>
      
      
		</div>
	</nav>
    </section>

<section data-bs-version="5.1" class="header10 cid-uuaRroRxFA mbr-fullscreen" id="header10-b">
  
  
  <div class="container-fluid">
    <div class="row">
      <div class="content-wrap col-12 col-md-6">
        <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
          <strong> {{ __('frontend.quran_kareem') }} </strong>
        </h1>
        
        <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
          أَيَحْسَبُ الْإِنسَانُ أَن يُتْرَكَ سُدًى
          <br />
            Do people think they will be left without purpose?

        </p>
        <div class="mbr-section-btn">
          <a class="btn btn-white display-7" href="#">{{ __('frontend.read_more') }} </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="header16 cid-uuaRskCZAa" id="header16-c">
  
  <div class="text-center container">
    <div class="row justify-content-center mb-4">
      <div class="col-12 col-lg-8">
        <div class="image-wrap">
          <img src="{{ asset('assets/frontend/images/hadis.jfif' ) }}" alt="Mobirise Website Builder">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 content-head">
        <h1 class="mbr-section-title mbr-fonts-style mt-4 display-2">
          <strong> {{ __('frontend.sahih_albukhari') }} </strong>
        </h1>
        <p class="mbr-text mbr-fonts-style mt-4 display-7">
        كَلِمَتَانِ خَفِيفَتَانِ عَلَى اللِّسَانِ، ثَقِيلَتَانِ فِي الْمِيزَانِ، حَبِيبَتَانِ إِلَى الرَّحْمَنِ
(سُبْحَانَ اللهِ وَبِحَمْدِهِ)، (سُبْحانَ اللهِ الْعَظِيمِ)
    <br /> <br />
    There are two words which are light on the tongue, heavy on the scale, and loved by the Most Merciful: SubhanAllahi wa bihamdi, SubhanAllahi al-azeem (Glorified is Allah and praised is He, Glorified is Allah the Most Great).
        </p>
        <div class="row-links mt-4">
        </div>
      </div>
    </div>
  </div>
</section>

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
          حاسبوا أنفسكم قبل أن تحاسبوا، وزنوا أعمالكم قبل أن توزن عليكم.

          <br /> <br />
          Take account of yourselves before you are taken to account, and weigh your deeds before they are weighed for you.  <br /> <br />
          <strong> Umar ibn al-Khattab (RA) </strong>
        </p>
        <div class="row-links mt-4">

        </div>
      </div>
    </div>
  </div>
</section>

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
      <div class="col-sm-6 col-md-12 mb-3 mb-lg-0 col-lg-3">
        <div class="card-wrap card1">
          <div class="image-wrap">
            <img src="{{ asset('assets/frontend/images/quran.jpg') }}" alt="Mobirise Website Builder">
            <div class="social-row display-7">
              
            </div>
          </div>
          <div class="content-wrap">
            <h5 class="mbr-card-title card-title1 mbr-fonts-style align-left mb-2 display-5">
              <strong> {{ __('frontend.nazra_quran') }} </strong>
            </h5>
            
            <p class="card-text1 mbr-fonts-style align-left mb-3 display-7">
              Lorem ipsum dolor sit amet nulla vel, consectetur adipiscing.
              Donec massa nulla gravida pulvinar.
            </p>
            <div class="mbr-section-btn align-left content-footer">
              <a class="btn article-btn btn-info display-7" href="#"><strong>{{ __('frontend.read_more') }}</strong></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-12 mb-3 mb-lg-0 col-lg-3">
        <div class="card-wrap card2">
          <div class="image-wrap">
            <img src="{{ asset('assets/frontend/images/quran.jpg') }}" alt="Mobirise Website Builder">
            <div class="social-row display-7">
              
            </div>
          </div>
          <div class="content-wrap">
            <h5 class="mbr-card-title card-title2 mbr-fonts-style align-left mb-2 display-5">
              <strong> {{ __('frontend.dars_a_nizami') }} </strong>
            </h5>
            
            <p class="card-text2 mbr-fonts-style align-left mb-3 display-7">
              Lorem ipsum dolor sit amet nulla vel, consectetur adipiscing.
              Donec massa nulla gravida pulvinar.<br>
            </p>
            <div class="mbr-section-btn btn-section align-left content-footer">
              <a class="btn article-btn btn-white display-7" href="#"><strong>{{ __('frontend.read_more') }}</strong></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-12 mb-3 mb-lg-0 col-lg-3">
        <div class="card-wrap card3">
          <div class="image-wrap">
            <img src="{{ asset('assets/frontend/images/quran.jpg') }}" alt="Mobirise Website Builder">
            <div class="social-row display-7">
              
            </div>
          </div>
          <div class="content-wrap">
            <h5 class="mbr-card-title card-title3 mbr-fonts-style align-left mb-2 display-5">
              <strong> {{ __('frontend.uloom_a_fiqa') }} </strong>
            </h5>
            
            <p class="card-text3 mbr-fonts-style align-left mb-3 display-7">
              Lorem ipsum dolor sit amet nulla vel, consectetur adipiscing.
              Donec massa nulla gravida pulvinar.
            </p>
            <div class="mbr-section-btn btn-section align-left content-footer">
              <a class="btn article-btn btn-black display-7" href="#"><strong>{{ __('frontend.read_more') }}</strong></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-12 col-lg-3">
        <div class="card-wrap card4">
          <div class="image-wrap">
            <img src="{{ asset('assets/frontend/images/quran.jpg') }}" alt="Mobirise Website Builder">
            <div class="social-row display-7">
             
            </div>
          </div>
          <div class="content-wrap">
            <h5 class="mbr-card-title card-title4 mbr-fonts-style align-left mb-2 display-5">
              <strong>{{ __('frontend.daura_a_hadees') }} </strong>
            </h5>
            
            <p class="card-text4 mbr-fonts-style align-left mb-3 display-7">
              Lorem ipsum dolor sit amet nulla vel, consectetur adipiscing.
              Donec massa nulla gravida pulvinar.
            </p>
            <div class="mbr-section-btn btn-section align-left content-footer">
              <a class="btn article-btn btn-primary display-7" href="#"><strong>{{ __('frontend.read_more') }}</strong></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
        <div class="item features-image mb-4 col-6 col-md-4 col-lg-3 active">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="{{ asset('assets/frontend/images/masjid2.jpg') }}" alt="Mobirise Website Builder" title="" data-slide-to="0" data-bs-slide-to="0">
            </div>
            
          </div>
        </div>
        <div class="item features-image mb-4 col-6 col-md-4 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="{{ asset('assets/frontend/images/masjid2.jpg') }}" alt="Mobirise Website Builder" title="" data-slide-to="1" data-bs-slide-to="1">
            </div>
            
          </div>
        </div>
        <div class="item features-image mb-4 col-6 col-md-4 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="{{ asset('assets/frontend/images/masjid2.jpg') }}" alt="Mobirise Website Builder" title="" data-slide-to="2" data-bs-slide-to="2">
            </div>
            
          </div>
        </div><div class="item features-image mb-4 col-6 col-md-4 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="{{ asset('assets/frontend/images/masjid2.jpg') }}" alt="Mobirise Website Builder" title="" data-slide-to="3" data-bs-slide-to="3">
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
</section>

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
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <a href="#">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('assets/frontend/images/slider1.jpg') }}" alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <a href="#">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('assets/frontend/images/slider2.jpg') }}" alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <a href="#">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('assets/frontend/images/slider3.jpg') }}" alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <a href="#">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('assets/frontend/images/slider4.jpg') }}" alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <a href="#">
                                    <div class="slide-content">
                                        <div class="item-img">
                                            <div class="item-wrapper">
                                                <img src="{{ asset('assets/frontend/images/slider1.jpg') }}" alt="Mobirise Website Builder" title="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
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
    	<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="{{ asset('assets/frontend/images/imam_ahmad_raza.jpg') }}" alt="Mobirise Website Builder" title="">
					</div>
					<div class="item-content align-left">
						<h5 class="item-title mbr-fonts-style mb-3 display-7">
							Bani
						</h5>
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong>Imam Ahmad Raza Khan Barelvi </strong>
						</h6>
						
					</div>
					
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="{{ asset('assets/frontend/images/dr_tahir_qadri.jpg') }}" alt="Mobirise Website Builder" title="">
					</div>
					<div class="item-content align-left">
						<h5 class="item-title mbr-fonts-style mb-3 display-7">
							Bani
						</h5>
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong>Sheikh ul Islam Dr Tahir Ul Qadri </strong>
						</h6>
						
					</div>
					
				</div>
			</div>
      <div class="item features-image col-12 col-md-6 col-lg-4">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="{{ asset('assets/frontend/images/dr_ashfraf_asif.jpg') }}" alt="Mobirise Website Builder" title="">
          </div>
          <div class="item-content align-left">
            <h5 class="item-title mbr-fonts-style mb-3 display-7">
              Bani
            </h5>
            <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
              <strong>Allam Dr Ashraf Asif Jalai </strong>
            </h6>
            
          </div>
          
        </div>
      </div>
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="content2 cid-uuaSbFJT5X" id="content2-i">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong> {{ __('frontend.islamic_news_headlines')}} </strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">{{ __('frontend.read_recent_news')}} </h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('assets/frontend/images/jashan_eid_milad.jpg') }}" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Jashan Eid Milad Ul Nabi </a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                            <strong>Muhammd Shoaban </strong><em> 10-10-2025</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                          byyan of Dr Ashraf Asif Jalai 
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary display-7" target="_blank">{{ __('frontend.read_more') }}
                            </a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('assets/frontend/images/byyan_dr_tahir.jpg') }}" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">Dr Tahir Ul Qadri Byyan</a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Muhammd Shoaban
                                </strong><em>&nbsp;09-09-2025</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">byyan of Dr Tahir Ul Qadri <br>
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-7" target="_blank">{{ __('frontend.read_more') }}
                            </a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('assets/frontend/images/byyan_dr_ashraf.jpg') }}" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><a href="#top" class="text-primary">
                          Dr Ashraf Asif Jalai Byyan
                        </a></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Muhammad Shoaban 
                            </strong><em>08-08-2025</em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                          byyan of Dr Ashraf Asif Jalai 
                        </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-7" target="_blank">{{ __('frontend.read_more') }}
                            </a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts2 map1 cid-uuaSmSEyRh" id="contacts02-j">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Contacts</strong>
                    </h3>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="text-wrapper">
                        <h5 class="cardTitle mbr-fonts-style mb-2 display-5">
                        <strong>Contact Us</strong>
                    </h5>
                    <ul class="list mbr-fonts-style display-7">
                        <li class="mbr-text item-wrap">Phone: <a href="tel:+92 346 8832741" class="text-primary">+92 334 6731495</a></li>
                        <li class="mbr-text item-wrap">WhatsApp: <a href="tel:+92 346 8832741" class="text-primary">+92 346 8832741</a></li>
                        <li class="mbr-text item-wrap">Email: <a href="mailto:mshoaban09@gmail.com" class="text-primary">mshoaban09@gmail.com</a></li>
                        <li class="mbr-text item-wrap">Address: Model Town Dera Ghazi Khan , Pakistan </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="map-wrapper col-12 col-md-6">
                <div class="google-map">
                  <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3472.426090162902!2d70.64058977549714!3d30.054225181883374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3938671f3a59b26b%3A0x2b7f4f8b1a69b9a6!2sDera%20Ghazi%20Khan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1698064412054!5m2!1sen!2s" allowfullscreen=""></iframe>
              </div>

        </div>
    </div>
</section>

<section data-bs-version="5.1" class="social02 cid-uuaSqC8yWH" id="social02-k">
	

	
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mb-5">
					<h5 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Follow us</strong>
					</h5>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-instagram socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>Instagram</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-twitch socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>Twitch</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-twitter socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>Twitter</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-youtube socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>YouTube</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-tiktok socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>TikTol</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<span class="mbr-iconfont m-auto socicon-facebook socicon"></span>
					<div class="card-box">
						<h4 class="card-title mbr-fonts-style mb-1 display-7">
							<strong>Facebook</strong>
						</h4>
						<h5 class="card-text mbr-fonts-style display-7">
							Lorem ipsum dolor sit amet.
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="footer1 cid-uuaStsS2Vn" once="footers" id="footer01-l">
  <div class="container">
      <div class="row mbr-white">
          <div class="col-12 col-md-6 col-lg-3">
              <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
                  <strong>{{ __('frontend.company') }}</strong>
              </h5>
              <ul class="list mbr-fonts-style display-7">
                  <li class="mbr-text item-wrap">{{ __('frontend.about') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.press') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.careers') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.social') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.contact') }}</li>
              </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
                  <strong>{{ __('frontend.features') }}</strong>
              </h5>
              <ul class="list mbr-fonts-style display-7">
                  <li class="mbr-text item-wrap">{{ __('frontend.branding') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.promotion') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.design') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.creative') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.production') }}</li>
              </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
                  <strong>{{ __('frontend.support') }}</strong>
              </h5>
              <ul class="list mbr-fonts-style display-7">
                  <li class="mbr-text item-wrap">{{ __('frontend.help') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.info') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.contacts') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.faq') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.report') }}</li>
              </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
              <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
                  <strong>{{ __('frontend.about') }}</strong>
              </h5>
              <ul class="list mbr-fonts-style display-7">
                  <li class="mbr-text item-wrap">{{ __('frontend.history') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.clients') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.teams') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.brand') }}</li>
                  <li class="mbr-text item-wrap">{{ __('frontend.terms') }}</li>
              </ul>
          </div>
          <div class="col-12 mt-5 footer-col">
              <div class="mbr-section-btn align-left">
                  <a class="btn btn-primary display-7" href="#">{{ __('frontend.signup') }}</a>
                  <a class="btn btn-success-outline display-7" href="#">{{ __('frontend.read_more') }}</a>
              </div>

              <div class="social-row mt-2 display-7">
                  <div class="soc-item">
                      <a href="#/">
                          <span class="mbr-iconfont socicon socicon-facebook"></span>
                      </a>
                  </div>
                  <div class="soc-item">
                      <a href="#/">
                          <span class="mbr-iconfont socicon socicon-twitter"></span>
                      </a>
                  </div>
                  <div class="soc-item">
                      <a href="#/">
                          <span class="mbr-iconfont socicon socicon-instagram"></span>
                      </a>
                  </div>
                  <div class="soc-item">
                      <a href="#/">
                          <span class="mbr-iconfont socicon socicon-logmein socicon"></span>
                      </a>
                  </div>
              </div>
          </div>
          <div class="col-12 mt-4">
              <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
                  © {{ __('frontend.copyright') }} 2030 {{ __('frontend.mobirise') }} - {{ __('frontend.all_rights_reserved') }}
              </p>
          </div>
      </div>
  </div>
</section>

<script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.bundle.min.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/smoothscroll/smooth-scroll.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/ytplayer/index.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/dropdown/js/navbar-dropdown.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/embla/embla.min.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/embla/script.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/theme/js/script.js' ) }} "></script>  
  
  
</body>
</html>