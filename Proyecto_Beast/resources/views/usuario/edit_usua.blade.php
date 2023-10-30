@extends('layouts.plantilla_general')

@section('title', 'Editar Usuarios')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Edición de Usuarios</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS NUEVOS DATOS DEL USUARIO
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
                <input type="text" class="form-control" name="txtPuesto_Usuario" placeholder="Introduce el Puesto del Usuario"
                    value="{{ old('txtPuesto_Usuario') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtPuesto_Usuario') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="text" class="form-control" name="txtContrasena_Usuario" placeholder="Introduce la Contraseña del Usuario"
                    value="{{ old('txtContrasena_Usuario') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtContrasena_Usuario') }}</p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Actualizar
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
