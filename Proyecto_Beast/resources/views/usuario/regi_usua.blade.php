@extends('layouts.plantilla_general')

@section('title', 'Registro Usuarios')

@section('contenido')


<div class="contenedor">
    <h1 class="title">Registro de </h1>

    @if(session()->has('confirmacion_regi_usua'))

        <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_usua') }}','success')</script>

    @endif

    <div class="form">

            <form action="/save_usua" method="GET">
                @csrf

                <div class="dato">
                    <label class="dato_txt">Nombre Completo:</label>
                    <input type="text" class="dato_input" name="txtNombre_Usuario" placeholder="Introduce el Nombre del Usuario"
                        value="{{ old('txtNombre_Usuario') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Usuario') }}</p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Correo:</label>
                    <input type="text" class="dato_input" name="txtCorreo_Usuario" placeholder="Introduce el Correo del Usuario"
                        value="{{ old('txtCorreo_Usuario') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtCorreo_Usuario') }}</p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Puesto:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Abre para seleccionar rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Compra</option>
                        <option value="3">Venta</option>
                        <option value="4">Almacen</option>
                    </select>
                </div>

                <div class="dato">
                    <label class="dato_txt">Contraseña:</label>
                    <input type="text" class="dato_input" name="txtContrasena_Usuario" placeholder="Introduce la Contraseña del Usuario"
                        value="{{ old('txtContrasena_Usuario') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtContrasena_Usuario') }}</p>
                </div>

                <div class="">
                    <button class="boton-guardar" type="submit">
                        Guardar
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>

@endsection
