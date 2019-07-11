<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Favicon -->
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('roberto/style.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Header Area Start -->
        <header class="header-area">
            <!-- Top Header Area Start -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">

                        <div class="col-6">
                            <div class="top-header-content">
                                <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                                <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="top-header-content">
                                <!-- Top Social Area -->
                                <div class="top-social-area ml-auto">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    @if(Auth::check())
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" title="logout"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </a>
                                    @endif
                                    @can('Employe Edit Order')
                                        <a href="/dashboard"><i class="fa fa-edit" title="Dasboard"></i></a>
                                    @endcan
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Top Header Area End -->

            <!-- Main Header Start -->
            @include('clients.layouts.robertonavbar')
            
        </header>
        <!-- Header Area End -->

        <!-- Welcome Area Start -->
        @yield('WelcomeSlide')
        <!-- Welcome Area End -->

        <!-- About Us Area Start -->
        @yield('Content')
        

        <!-- Footer Area Start -->
        @include('clients.layouts.robertofooter')
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="{{asset('roberto/js/jquery.min.js')}}"></script>
        <!-- Popper -->
        <script src="{{asset('roberto/js/popper.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('roberto/js/bootstrap.min.js')}}"></script>
        <!-- All Plugins -->
        <script src="{{asset('roberto/js/roberto.bundle.js')}}"></script>
        <!-- Active -->
        <script src="{{asset('roberto/js/default-assets/active.js')}}"></script>

    </body>

</html>