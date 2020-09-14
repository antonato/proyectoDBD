<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('assets\img\logoA-Riendo.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A-riendo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/listA.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,700;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">


</head>


<body>
    <div id="navbar" class="navbar d-flex w-100 navbar-expand-md" alt="barra superior">
        <a href="/" alt="volver a página principal">
            <div class="ml-5 w-100 d-flex mt-2 mb-2 align-items-center">
                <img src="{{ asset('assets\img\logoA-Riendo.png') }}" alt="logotipo de página" width="60px" />
                <h1 id="title" class="text-white m-0 ml-1">A-Riendo</h1>
            </div>
        </a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if(Request::url() === 'http://127.0.0.1:8000/ingresar' || Request::url() === 'http://127.0.0.1:8000/registro')
                @else
                    @if($user ?? '' != NULL)
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ $user }}
                            </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.register') }}">{{ __('Registrate') }}</a>
                            </li>
                        @endif
                    @endif
                @endif
            </ul>
        </div>


        <ul class="navbar-nav ml-auto" >
            <a href="https://youtu.be/bZpJTQITN8k?t=4">
                <img src="{{ asset('assets\img\oscar.png') }}" alt="una oveja fachera" width="75px" />
            </a>
        </ul>
    </div>
    <main class="pb-1">
        @yield('content')
    </main>
</body>