@extends('layouts.plantilla_general')

@section('title', 'Edición proveedor')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Edición de proveedor</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS NUEVOS DATOS DEL PROVEEDOR
    </div>

    <div class="card-body">
        <form action="/actu_prov" method="GET">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="{{ old('txtNombre_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Proveedor') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Empresa:</label>
                <input type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="{{ old('txtEmpresa_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtEmpresa_Proveedor') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Telefono:</label>
                <input type="text" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="{{ old('txtTelefono_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtTelefono_Proveedor') }}</p>

            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="text" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="{{ old('txtCorreo_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCorreo_Proveedor') }}</p>


            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Actualizar
                </button>
            </div>

        </form>
    </div>
</div>


@endsection
