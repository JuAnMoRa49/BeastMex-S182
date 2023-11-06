
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
</head>

<body>

@include ('partials.navbar')

    <div class="container">
        @yield('contenido')
    </div>
    
</body>
</html>