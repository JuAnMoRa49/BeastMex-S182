
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @vite(['resources/js/app.js'])
    </head>

    <body class="body">

    @include ('layouts.app')

    <div class="container">
        @yield('contenido')
    </div>

    </body>
    
</html>