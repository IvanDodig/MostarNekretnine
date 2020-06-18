<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

</head>
<body>
<div id="app">
<nav class="navigation">
    <a href="{{ url('/') }}"><h1 class="heading-1">StanoviMostar</h1></a>
    <div class="navigation__items">

        <a class="navigation__item"  href="{{ url('/') }}">
            <span>Home</span>
            <span>
                <i class="fas fa-house-user"></i>
            </span>
        </a>


        @guest
        <a class="navigation__item"  href="{{ route('login') }}">
            <span>Login</span>
            <span>
                <i class="fas fa-sign-in-alt"></i>
            </span>
        </a>

        <a class="navigation__item" href="{{ route('register') }}">
            <span>Register</span>
            <span>
                <i class="fas fa-user-plus"></i>
            </span>

        </a>
        @else
        <div>
            <a class="navigation__item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span>Odjavi se</span>
                <span>
                    <i class="fas fa-sign-in-alt"></i>
                </span>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endguest


    </div>
</nav>




        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

@yield('content')



<footer class="footer">
    <div class="footer__up">
        <div class="footer__up--contact">
            <div class="footer__up--heading heading-3">
                Kontakt
            </div>
            <div class="footer__up--info">
                <div class="footer__up--location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ulica Kralja <br> Petra Kresimira 88000</span>
                </div>
                <div class="footer__up--mail">
                    <i class="far fa-envelope"></i>
                    <span>stanovi.mostar@info.com</span>
                </div>
                <div class="footer__up--phone">
                    <i class="fas fa-phone"></i>
                    <span>+387 63 111-111</span>
                </div>
            </div>
        </div>
        <div class="footer__up--signup">
            <div class="footer__up--desc heading-3">
                Prijavite se na newsletter!
            </div>
            <label for="info">Enter your Email:</label>
            <input type="text" name="info" id="info">
            <button class="btn btn--footer">Sign up Now</button>
        </div>

    </div>
    <div class="footer__mid">

            <div><a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-1x"></i></a></div>
            <div><a href="https://twitter.com"><i class="fab fa-twitter fa-1x"></i></a></div>
            <div><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in fa-1x"></i></a></div>
            <div><a href="https://plus.google.com"><i class="fab fa-google-plus-g fa-1x"></i></a></div>
            <div><a href="https://www.pinterest.com"><i class="fab fa-pinterest-p fa-1x"></i></a></div>
            <div><a href="https://www.youtube.com"><i class="fab fa-youtube fa-1x"></i></a></div>

    </div>
    <div class="footer__down">
        Copyright &copy; 2020 StanoviMostar
    </div>
</footer>
</div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
