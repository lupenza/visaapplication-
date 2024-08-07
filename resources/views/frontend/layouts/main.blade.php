<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Visa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Visa Application">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ 'assets/frontend/css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/animate.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/magnific-popup.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/fontawesome-all.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/flaticon.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/odometer.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/swiper-bundle.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/aos.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/default.css' }}">
    <link rel="stylesheet" href="{{ 'assets/frontend/css/main.css' }}">
</head>
<body>
    <!--Preloader-->
    {{-- <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/preloader.html" alt="Preloader"></div>
            </div>
        </div>
    </div> --}}
    <!--Preloader-end -->
    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <!-- header-area -->
   @include('frontend.layouts.header')
    <!-- header-area-end -->
    <!-- main-area -->
   @yield('content')
    <!-- main-area-end -->
    <!-- footer-area -->
   @include('frontend.layouts.footer')
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="{{ 'assets/frontend/js/vendor/jquery-3.6.0.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/bootstrap.bundle.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/jquery.magnific-popup.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/jquery.odometer.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/jquery.appear.js'}} "></script>
    <script src="{{ 'assets/frontend/js/gsap.js'}} "></script>
    <script src="{{ 'assets/frontend/js/ScrollTrigger.js'}} "></script>
    <script src="{{ 'assets/frontend/js/SplitText.js'}} "></script>
    <script src="{{ 'assets/frontend/js/gsap-animation.js'}} "></script>
    <script src="{{ 'assets/frontend/js/jquery.parallaxScroll.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/swiper-bundle.js'}} "></script>
    <script src="{{ 'assets/frontend/js/ajax-form.js'}} "></script>
    <script src="{{ 'assets/frontend/js/wow.min.js'}} "></script>
    <script src="{{ 'assets/frontend/js/aos.js'}} "></script>
    <script src="{{ 'assets/frontend/js/main.js'}} "></script>
    @stack('scripts')
</body>
</html>