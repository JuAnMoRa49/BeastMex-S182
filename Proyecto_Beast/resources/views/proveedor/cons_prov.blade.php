@extends('layouts.plantilla_general')

@section('title', 'Consulta Proveedores')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Consulta de Proveedor</h1>

@if(session()->has('confirmacion_cons_prov'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_prov') }}','success')</script>

@endif

<div class="contenedor_consulta">

    <div class="consulta">

        <form class= "form"action="/cons_prov_espe" method="GET">
            @csrf
        
        <div class="form_consulta">
            <label class="dato_txt">Nombre</label>
            <input class="dato_input" type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce el Nombre del Proveedor"
                value="{{ old('txtConsultaProveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtConsultaProveedor') }}</p>
        </div>

        <div class="d-grid gap-2">
            <button class="boton-buscar" type="submit">
                Buscar
            </button>
        </div>
        </form>

        <form class= "form"action="/cons_prov_espe" method="GET">
            @csrf
        
        <div class="form_consulta">
            <label class="dato_txt">Empresa</label>
            <input class="dato_input" type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce la Empresa del Proveedor"
                value="{{ old('txtConsultaProveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtConsultaProveedor') }}</p>
        </div>

        <div class="d-grid gap-2">
            <button class="boton-buscar" type="submit">
                Buscar
            </button>
        </div>
        </form>

    </div>

    <div class="resultado">

        <h3 class="subtitle">Resultados de la búsqueda</h3>

        <div class="contenedor contenedor_grande">

            <table class="tabla">

                    <tr class="tabla-top">
                        <th class="top_left">Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th class="top_right">Opciones</th>
                    </tr>
                    <tr>
                        <td>Jose Eduardo</td>
                        <td>Lenovo</td>
                        <td>4425679064</td>
                        <td>jose.eduardo@lenovo.com</td>
                        <td>
                            <a href="/edit_prov" class="btn btn-warning">Editar</a>
                            <a href="/soli_prov" class="btn btn-success">Solicitar</a>
                            <a href="/dele_prov" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>
            </table>
        </div>
    </div>


 @endsection