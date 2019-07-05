<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="{{asset ('argon/vendor/jquery/dist/jquery.min.js')}}"></script>

        @yield('dynamic-script')
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <!-- Styles -->
        <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('argon/css/argon.css?v=1.0.0') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">        
        @yield('dynamic-style')
    </head>
    <body>
  <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
        <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="../index.html">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            @include('layouts.navbar')
        </div>
    </nav>
  <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
            @include('layouts.navbar-user')
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-lg-8 d-flex align-items-center">
            <!-- Header container -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10 text-center">
                        @include ('errors.list')
                    </div>
                </div>
                @yield('header-content')
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                    © 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        </div>

    </div>
    <!-- Argon Scripts -->
  <!-- Core -->
    <script src="{{asset ('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('argon/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset ('argon/js/argon.js?v=1.0.0')}}"></script>
    </body>
</html>