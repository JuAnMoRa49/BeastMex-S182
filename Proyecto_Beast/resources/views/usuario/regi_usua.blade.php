@extends('layouts.plantilla_general')

@section('title', 'Registro Usuarios')

@section('contenido')

<div class="contenedor">
    <h1 class="title">Registro de Usuarios</h1>

    @if(session()->has('confirmacion_regi_usua'))
        <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_usua') }}','success')</script>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="label-dato">Nombre Completo:</label>
            <input type="text" class="input-dato" name="txtNombre_Usuario" placeholder="Introduce el Nombre del Usuario" value="{{ old('txtNombre_Usuario') }}">
            <p class="error-input">{{ $errors->first('txtNombre_Usuario') }}</p>
        </div>

        <div class="form-group">
            <label class="label-dato">Correo:</label>
            <input type="email" class="input-dato" name="txtCorreo_Usuario" placeholder="Introduce el Correo del Usuario" value="{{ old('txtCorreo_Usuario') }}">
            <p class="error-input">{{ $errors->first('txtCorreo_Usuario') }}</p>
        </div>

        <div class="form-group">
            <label class="label-dato">Puesto:</label>
            <select class="select-dato" name="txtPuesto_Usuario">
                <option selected disabled>Selecciona un rol</option>
                <option value="1">Administrador</option>
                <option value="2">Compra</option>
                <option value="3">Venta</option>
                <option value="4">Almacén</option>
            </select>
            <p class="error-input">{{ $errors->first('txtPuesto_Usuario') }}</p>
        </div>

        <div class="form-group">
            <label class="label-dato">Contraseña:</label>
            <input type="password" class="input-dato" name="txtContrasena_Usuario" placeholder="Introduce la Contraseña del Usuario">
            <p class="error-input">{{ $errors->first('txtContrasena_Usuario') }}</p>
        </div>

        <div class="form-group">
            <button class="button-guardar" type="submit">
                Guardar
            </button>
        </div>
    </form>
</div>

@endsection
