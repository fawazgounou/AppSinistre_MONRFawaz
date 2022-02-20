<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Site Metas -->

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="dashbord/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="dashbord/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/style.css">
    <link rel="stylesheet" href="plugins/tableau.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="dashbord/css/responsive.css">
    <link rel="stylesheet" href="dashbord/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashbord/css/custom.css">
	<script src="dashbord/js/modernizr.js"></script> <!-- Modernizr -->
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" href="#" role="button" >
                                    {{ Auth::user()->name }}
                                </a>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img class="img-fluid" src="images/logo.png" alt="" />
                </a>

                <div class="collapse navbar-collapse"  id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                      <a class="nav-link js-scroll-trigger active " href="tableaubord"><strong>Acceuil</strong></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Infosinistré"><strong>Informations du Sinistré</strong></a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Infosinistres"><strong>Informations du Sinistre</strong></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="voirinfo"> <strong>Soumis</strong></a>
                      </li>




                  </ul>
                </div>
              </div>
        </nav>

        <main class="py-4">
            {{$slot}}
        </main>
    </div>
    <!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- Camera Slider -->
<script src="js/jquery.mobile.customized.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/parallaxie.js"></script>
<script src="js/headline.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
    @livewireScripts
</body>
</html>
