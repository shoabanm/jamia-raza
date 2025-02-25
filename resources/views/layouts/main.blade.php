<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>جامعہ رضا العلوم </title>
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
	.active {
		background: darkgray;
	}
  </style>
  
</head>
<body>
  
	<section data-bs-version="5.1" class="menu menu3 cid-uuaQzWYgQF" once="menu" id="menu03-3">
		<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		  <div class="container">
			<div class="navbar-brand">
			  <span class="navbar-logo" style="font-size: 18px;">
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
				<li class="nav-item">
					<a class="nav-link link text-black display-4 {{ request()->routeIs('frontend.digital_libraray') ? 'active' : '' }}" href="{{ route('frontend.digital_libraray') }}">{{ __('frontend.digital_library') }}</a>
				</li>
			
				<li class="nav-item">
				  <a class="nav-link link text-black display-4 {{ request()->routeIs('frontend.teachers') ? 'active' : '' }}" href="{{ route('frontend.teachers') }}">{{ __('frontend.teachers') }}</a>
				</li>
			
				<li class="nav-item">
					<a class="nav-link link text-black display-4 {{ request()->routeIs('frontend.services') ? 'active' : '' }}" href="{{ route('frontend.services') }}">{{ __('frontend.services') }}</a>
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
					<a class="dropdown-item" href="{{ url('lang/en') }}">{{ __('frontend.english') }}</a>
					<a class="dropdown-item" href="{{ url('lang/ur') }}">{{ __('frontend.urdu') }}</a>
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
	
	@yield('content')

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
							<strong>TikTo</strong>
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
					<strong>Company</strong>
				</h5>
				<ul class="list mbr-fonts-style display-7">
					<li class="mbr-text item-wrap">About</li>
					<li class="mbr-text item-wrap">Press</li>
					<li class="mbr-text item-wrap">Careers</li>
					<li class="mbr-text item-wrap">Social</li>
					<li class="mbr-text item-wrap">Contact</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
					<strong>Features</strong>
				</h5>
				<ul class="list mbr-fonts-style display-7">
					<li class="mbr-text item-wrap">Branding</li>
					<li class="mbr-text item-wrap">Promotion</li>
					<li class="mbr-text item-wrap">Design</li>
					<li class="mbr-text item-wrap">Creative</li>
					<li class="mbr-text item-wrap">Production</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
					<strong>Support</strong>
				</h5>
				<ul class="list mbr-fonts-style display-7">
					<li class="mbr-text item-wrap">Help</li>
					<li class="mbr-text item-wrap">Info</li>
					<li class="mbr-text item-wrap">Contacts</li>
					<li class="mbr-text item-wrap">FAQ</li>
					<li class="mbr-text item-wrap">Report</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-5">
					<strong>About</strong>
				</h5>
				<ul class="list mbr-fonts-style display-7">
					<li class="mbr-text item-wrap">History</li>
					<li class="mbr-text item-wrap">Clients</li>
					<li class="mbr-text item-wrap">Teams</li>
					<li class="mbr-text item-wrap">Brand</li>
					<li class="mbr-text item-wrap">Terms</li>
				</ul>
			</div>
			<div class="col-12 mt-5 footer-col">
				<div class="mbr-section-btn align-left">
					<a class="btn btn-primary display-7" href="#">Sign Up</a>
					<a class="btn btn-success-outline display-7" href="#">Read More</a>
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
							<span class="mbr-iconfont socicon-logmein socicon"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 mt-4">
				<p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
					© Copyright 2030 Mobirise - All Rights Reserved
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