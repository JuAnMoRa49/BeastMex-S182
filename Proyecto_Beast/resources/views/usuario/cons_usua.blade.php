@extends('layouts.plantilla_general')

@section('title', 'Consulta Usuarios')

@section('contenido')

@if(session()->has('confirmacion_cons_usua'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_usua') }}','success')</script>

@endif

<div class="contenedor_consulta">

    <h1 class="title">Consulta de usuario</h1>

    <div class="consulta">

        <form class="form" action="/cons_usua_espe" method="GET">
            @csrf
        
            <div class="form_consulta">
                <label class="form-label">Nombre :</label>
                <input type="text" class="form-control" name="txtConsulta_Usuario" placeholder="Introduce el Nombre del Usuario"
                    value="{{ old('txtConsulta_Usuario') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtConsulta_Usuario') }}</p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Buscar
                </button>
            </div>
        </form>

        <form class="form" action="/cons_usua_espe" method="GET">
            @csrf
        
            <div class="form_consulta">
                <label class="form-label">Nombre o Puesto:</label>
                <input type="text" class="form-control" name="txtConsulta_Usuario" placeholder="Introduce el Puesto del Usuario"
                    value="{{ old('txtConsulta_Usuario') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtConsulta_Usuario') }}</p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
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
                            <th>Correo</th>
                            <th>Puesto</th>
                            <th>Contraseña</th>
                            <th class="top_right">Opciones</th>
                        </tr>
    
                        <tr class="resultado_consulta">
                            <th>Juan Alberto Catillo Garcia</th>
                            <th>juanalberto@beast.com</th>
                            <th>Administrador</th>
                            <th>*********</th>
                            <td>
                                <a href="/edit_usua" class="btn btn-warning">Editar</a>
                                <a href="/elim_usua" class="btn btn-danger">Eliminar</a>
                                <a href="/most_cont" class="btn btn-success">Mostrar</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
</div>

@endsection
    