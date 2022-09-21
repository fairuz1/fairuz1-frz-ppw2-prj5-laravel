<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Proyek Laravel</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <style>
        html { scroll-behavior: smooth; }
        * { padding: 0; margin: 0; font-family: 'Inter', sans-serif;}
        body { background-color: snow; color: #2E2E2E;}
        img { height: 100%; width: 100%; }
        .sections { height: 100vh; }
        .nav-height { height: 10vh; }
        .custom-positions { width: 100vw; height: 90vh;}

        .glass {
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            color: #2E2E2E;
        }

        .login-alert {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 2rem;
        }

        .custom-alert { 
            background-color: #F7ECDE; 
            font-size: 1.2em; 
            border-color: #E9DAC1;
            color: #472D2D;
        }

        .btn-primary {
            background-color: #319DA0;
            border: none;
            color: snow;
            font-size: 1.3em;
        }

        .button1:hover {
            background-color: #472D2D;
        }

        .btn-primary:hover, .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active, .open.dropdown-toggle.btn-primary {
            color: snow;
            background-color: #495C83 !important;
        }


    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top glass nav-height">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="font-size: 1.3em">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}" style="font-weight:800">LaravelProject</a>
                        </li>
                        
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
                            <li class="nav-item"><a class="nav-link active" href="{{ url('/Views') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="{{ url('/posts') }}">Impressions</a></li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle disabled" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Routing pages has been moved to controller
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/another_home') }}">Another Home</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/education') }}">Education</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/projects') }}">Projects</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ url('/about') }}">About</a></li>
                                </ul>
                            </li> --}}

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

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
