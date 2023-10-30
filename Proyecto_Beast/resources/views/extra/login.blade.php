@extends('layouts.plantilla_login')

@section('title', 'Login')

@section('contenido')

<div class="card text-center">

    <div class="card-body">

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control" id="email" placeholder="Introduce tu email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" required class="form-control" id="password" placeholder="Introduce tu contraseña">
            </div>

            <button type="submit" class="btn btn-primary" href="extra/perfil">Login</button>

        </form>

    </div>

</div>

@endsection