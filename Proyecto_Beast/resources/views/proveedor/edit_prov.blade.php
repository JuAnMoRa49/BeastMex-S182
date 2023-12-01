@extends('layouts.plantilla_general')

@section('title', 'Edición proveedor')

@section('contenido')

@if(session()->has('confirmacion_edit_prov'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_edit_prov') }}','success')</script>

@endif

<div class="contenedor">

    <h1 class="title">Edición de proveedor</h1>

    <div class="form">

        <form action="/actu_prov" method="GET">
            @csrf

            <div class="dato">
                <label class="dato_txt">Nombre:</label>
                <input class="dato_input" type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="{{ old('txtNombre_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Proveedor') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Empresa:</label>
                <input class="dato_input" type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="{{ old('txtEmpresa_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtEmpresa_Proveedor') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Telefono:</label>
                <input class="dato_input" type="numeric" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="{{ old('txtTelefono_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtTelefono_Proveedor') }}</p>

            <div class="dato">
                <label class="dato_txt">Correo:</label>
                <input class="dato_input" type="email" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="{{ old('txtCorreo_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCorreo_Proveedor') }}</p>


                <div class="contenedor-boton">
                    <button class="boton-guardar" type="submit">
                        Actualizar
                    </button>
                </div>

        </form>
    </div>
</div>


@endsection
