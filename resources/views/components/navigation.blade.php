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