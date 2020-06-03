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
</head>
<body>

<nav class="navigation">
    <a href="{{ url('/') }}"><h1 class="heading-1">StanoviMostar</h1></a>
    <ul class="navigation__items">
        <li class="navigation__item">
            <span>
                <i class="fas fa-sign-in-alt"></i>
            </span>
            <a class="navigation__item--link" href="{{ route('login') }}">
            Login
            </a>
        </li>

        <li class="navigation__item">

            <span>
                <i class="fas fa-user-plus"></i>
            </span>
            <a class="navigation__item--link" href="{{ route('register') }}">
            Register
            </a>
        </li>
    </ul>
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
            <div class="footer__up--heading">
                Kontakt adresa
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
                    <i class="far fa-phone"></i>
                    <span>+387 63 111-111</span>
                </div>
            </div>
        </div>

        <div class="footer__up--locations">
            <div class="footer__up--heading">
                Ulice
            </div>
            <div class="footer__up--streets">
                <div class="footer__up--street">Ulica Hrvatske Mladezi</div>
                <div class="footer__up--street">Ulica Hrvatske Mladezi</div>
                <div class="footer__up--street">Ulica Hrvatske Mladezi</div>
                <div class="footer__up--street">Ulica Hrvatske Mladezi</div>
            </div>

        </div>
        <div class="footer__up--ig">
            <div class="footer__up--heading">
                Kontakt adresa
            </div>
            <div class="footer__up--pics">
                <div class="footer__up--pic">
                    1
                </div>
                <div class="footer__up--pic">
                    2
                </div>
                <div class="footer__up--pic">
                    3
                </div>
                <div class="footer__up--pic">
                    3
                </div>
            </div>
        </div>
        <div class="footer__up--signup">
            <div class="footer__up--desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, beatae?
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

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
