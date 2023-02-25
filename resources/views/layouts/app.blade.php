<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
{{--        @vite(['resources/js/app.js'])--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app"><nav  class="navbar navbar-expand-lg navbar-dark bg-dark z-index-3 py-3">
            <div class="container">
                <a class="navbar-brand text-white" href="{{url("/accueil")}}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" >
                    Bieres
                </a>

                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
                </button>
                <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/list")}}">
                                lister
                            </a>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/contact")}}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/apropos")}}">
                                A propos
                            </a>
                        </li>

                    </ul>
                    {{--authentification realiser par moi mais incomplet
                    <ul class="navbar-nav navbar-nav-hover mx-auto ">
                        <li class="nav-item mx-2 ">
                            <a class="nav-link ps-2 d-flex float-end cursor-pointer align-items-center text-light" role="button" href="{{url("/login")}}">
                                s'inscrire
                            </a>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/register")}}">
                                Register
                            </a>
                        </li>
                    </ul>--}}
{{--                    authentification ui bootstrap --}}
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
