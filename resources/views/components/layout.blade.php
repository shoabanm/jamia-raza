<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  <!-- Add this in the <head> section -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    body {
      font-family: 'Montserrat', sans-serif !important;
    }
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

    {{ $slot }}
    @yield('content')

<script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.bundle.min.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/smoothscroll/smooth-scroll.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/ytplayer/index.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/dropdown/js/navbar-dropdown.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/embla/embla.min.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/embla/script.js' ) }} "></script>  
<script src="{{ asset('assets/frontend/theme/js/script.js' ) }} "></script>  
    
    
</body>
</html>
    