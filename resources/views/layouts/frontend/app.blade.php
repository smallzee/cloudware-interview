<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.min.css')}}" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.min.css')}}" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}" />
    <!--====== Jquery UI CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/fontawesome/css/all.min.css')}}" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/flaticon.css')}}" />
    <!--====== Spacing Css ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/spacing.min.css')}}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />
    <!--====== Responsive CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}" />
</head>
<body class="app-landing-page">

<div id="preloader">
{{--    <img class="preloader-image" width="60" src="assets/img/preloader-logo.png" alt="preloader" />--}}
</div>

@include('layouts.frontend.header')

@stack('content')

@include('layouts.frontend.footer')

<!--====== Jquery ======-->
<script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
<!--====== Bootstrap ======-->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!--====== Slick slider ======-->
<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<!--====== Magnific ======-->
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!--====== Isotope Js ======-->
<script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
<!--====== Jquery UI Js ======-->
<script src="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
<!--====== Inview ======-->
<script src="{{asset('assets/frontend/js/jquery.inview.min.js')}}"></script>
<!--====== Nice Select ======-->
<script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
<!--====== Wow ======-->
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<!--====== Main JS ======-->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>
</html>
