@extends('layouts.plantilla_general')

@section('title', 'Registro proveedor')

@section('contenido')

<div class="contenedor">

    <h1 class="title">Registro de proveedor</h1>

    @if(session()->has('confirmacion_regi_prov'))
        <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_prov') }}','success')</script>
    @endif


    <div class="form">

        <form action="/save_prov" method="GET">
            @csrf

            <div class="dato">
                <label class="dato_txt">Nombre:</label>
                <input class="dato_input" type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="{{ old('txtNombre_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Proveedor') }}</p>
            </div>

            <div class="dato">
                <label class="form-label">Empresa:</label>
                <input class="dato_input"type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="{{ old('txtEmpresa_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtEmpresa_Proveedor') }}</p>
            </div>

            <div class="dato">
                <label class="form-label">Telefono:</label>
                <input class="dato_input" type="number" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="{{ old('txtTelefono_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtTelefono_Proveedor') }}</p>

            <div class="dato">
                <label class="form-label">Correo:</label>
                <input class="dato_input" type="email" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="{{ old('txtCorreo_Proveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCorreo_Proveedor') }}</p>


            <div class="d-grid gap-2">
                <button class="boton-guardar" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>

</div>

@endsection
