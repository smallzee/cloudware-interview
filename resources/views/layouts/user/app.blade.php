<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, users-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{asset('assets/users/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/users/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('assets/users/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('assets/users/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{asset('assets/users/css/custom.min.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>
    <style>
        .form-group{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

@include('flash')
<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.user.header')

    <div class="vertical-overlay"></div>
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="{{route('dashboard.index')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
                                </span>
                        </a>

                         <a href="{{route('dashboard.index')}}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
                            </span>
                        <span class="logo-lg">
                                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                    </button>

                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{static_asset('author.jpg')}}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ ucwords(auth()->user()->name) }}</span>
                                    </span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ $page_title }}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">{{ $page_title }}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                @stack('content')

            </div>
        </div>

        @include('layouts.user.footer')
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/users/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/users/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/users/js/plugins.js')}}"></script>

<!-- list js-->
<script src="{{asset('assets/users/libs/list.js/list.min.js')}}"></script>
<script src="{{asset('assets/users/libs/list.pagination.js/list.pagination.min.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('assets/users/libs/apexcharts/apexcharts.min.js')}}"></script>

<!--dashboard crm init js-->
<script src="{{asset('assets/users/js/pages/dashboard-crm.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/users/js/app.js')}}"></script>
</body>
</html>
