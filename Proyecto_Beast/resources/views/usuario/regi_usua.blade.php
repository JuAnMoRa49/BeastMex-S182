@extends('layouts.plantilla_general')

@section('title', 'Registro Usuarios')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Registro de Usuarios</h1>

@if(session()->has('confirmacion_regi_usua'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_usua') }}','success')</script>

@endif

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS DATOS DEL USUARIO
    </div>

    <div class="card-body">
        <form action="/save_usua" method="GET">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre Completo:</label>
                <input type="text" class="form-control" name="txtNombre_Usuario" placeholder="Introduce el Nombre del Usuario"
                    value="{{ old('txtNombre_Usuario') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Usuario') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="text" class="form-control" name="txtCorreo_Usuario" placeholder="Introduce el Correo del Usuario"
                    value="{{ old('txtCorreo_Usuario') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCorreo_Usuario') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Puesto:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Abre para seleccionar rol</option>
                    <option value="1">Administrador</option>
                    <option value="2">Compra</option>
                    <option value="3">Venta</option>
                    <option value="4">Almacen</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="text" class="form-control" name="txtContrasena_Usuario" placeholder="Introduce la Contraseña del Usuario"
                    value="{{ old('txtContrasena_Usuario') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtContrasena_Usuario') }}</p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
