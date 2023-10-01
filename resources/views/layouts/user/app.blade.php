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

</head>
<body>

<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.user.header')
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
