<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Karate')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!--Estilos de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Karate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('home')}}">Principal
                            @if(Route::is('home'))
                            <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('dojos.*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('dojos.index')}}">Dojos
                            @if(Route::is('dojos.*'))
                            <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Torneos
                            @if(Route::is('home'))
                                <span class="sr-only">(current)</span>
                            @endif
                        
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Alumnos
                            @if(Route::is('users.alumnos.*'))
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>

                    </li>
                </ul>
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('login')}}">Inicia sesión</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('register')}}">Regístrate</a>
                            </li>
                        @else 
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hola, {{Auth::user()->nombre}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Editar cuenta</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                        @endguest
                    </li>
                </ul>
            </div>
            
        
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

    </div>

  <!--JQUERY de bootstrap-->
 <!--para pruebas-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>
