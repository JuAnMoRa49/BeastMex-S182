<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <h1 class="display-4 text-center mt-5 mb-5">LOGIN</h1>
    <div class="container">
        @yield('contenido')
    </div>
    
</body>
</html>