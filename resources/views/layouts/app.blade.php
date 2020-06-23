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
<header>
    <nav class="navigation">
        <a href="{{ url('/') }}"><h1 class="heading-1">MoStan</h1></a>
        <div class="navigation__items">

            <a class="navigation__item"  href="{{ url('/') }}">
                <span>Home</span>
                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house-user" class="svg-inline--fa fa-house-user fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z"></path></svg>
                </span>
            </a>


            @guest
            <a class="navigation__item"  href="{{ route('login') }}">
                <span>Login</span>
                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
                </span>
            </a>

            <a class="navigation__item" href="{{ route('register') }}">
                <span>Register</span>
                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" class="svg-inline--fa fa-user-plus fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>                </span>

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

</header>



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
        Copyright &copy; 2020 <span>MoStan</span>
    </div>
</footer>
</div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
