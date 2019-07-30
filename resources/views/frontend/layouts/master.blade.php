<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('themes/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('themes/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('themes/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('themes/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('themes/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('themes/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/style.css')}}">

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
  </head>
  <body class="goto-here">
    
    <!-- Header -->
    @include('frontend.layouts.partials.header')

    <!-- Content -->
    @yield('main-content')
    

    <!-- Footer -->
    @include('frontend.layouts.partials.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('themes/js/jquery.min.js')}}"></script>
  <script src="{{asset('themes/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('themes/js/popper.min.js')}}"></script>
  <script src="{{asset('themes/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('themes/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('themes/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('themes/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('themes/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('themes/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('themes/js/aos.js')}}"></script>
  <script src="{{asset('themes/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('themes/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('themes/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('themes/js/google-map.js')}}"></script>
  <script src="{{asset('themes/js/main.js')}}"></script>

  <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')
    
  </body>
</html>