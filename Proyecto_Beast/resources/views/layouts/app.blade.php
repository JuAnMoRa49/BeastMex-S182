<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(143, 143, 217);">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container-fluid">
                    <a class="navbar-brand">BEASTMEX</a>
                    <div class="navbar-collapse" id="navbarSupportedContent">
            
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/perfil">Perfil</a>
                            </li>
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/regi_prod">Registrar</a></li>
                                    <li><a class="dropdown-item" href="/cons_prod">Consultar</a></li>
                                </ul>
                            </li>
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Proveedor
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/regi_prov">Registrar</a></li>
                                    <li><a class="dropdown-item" href="/cons_prov">Consultar</a></li>
                                </ul>
                            </li>
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Usuarios
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/regi_usua">Registrar</a></li>
                                    <li><a class="dropdown-item" href="/cons_usua">Consultar</a></li>
                                </ul>
                            </li>
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Compras
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/regi_comp">Registrar</a></li>
                                    <li><a class="dropdown-item" href="/cons_comp">Consultar</a></li>
                                </ul>
                            </li>
            
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Ventas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/regi_vent">Registrar</a></li>
                                    <li><a class="dropdown-item" href="/cons_vent">Consultar</a></li>
                                </ul>
                            </li>
            
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Reportes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/repo_comp">Compra</a></li>
                                    <li><a class="dropdown-item" href="/repo_vent">Venta</a></li>
                                    <li><a class="dropdown-item" href="/repo_gana">Ganancias</a></li>
                                </ul>
                            </li>
            
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Extras
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/carr_vent">Carrito de Venta</a></li>
                                    <li><a class="dropdown-item" href="/carr_comp">Carrito de Compra</a></li>
            
                                </ul>
            
                           
            
                        </ul>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('salir') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
