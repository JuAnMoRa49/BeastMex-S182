@extends('layouts.plantilla_general')

@section('title', 'Consulta Usuarios')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Consulta de Usuarios</h1>

<div class="card text-center">

    <div class="card-body">
        <form action="/cons_usua_espe" method="GET">
            @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre o Puesto:</label>
            <input type="text" class="form-control" name="txtConsulta_Usuario" placeholder="Introduce el Nombre o Puesto del Producto"
                value="{{ old('txtConsulta_Usuario') }}">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary btn-lg" type="submit">
                Buscar
            </button>
        </div>
        </form>
    </div>

            <div class="card-body mt-3">
                <h3>Resultados de la búsqueda</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Puesto</th>
                                <th>Contraseña</th>
                                <th>Opciones</th>
                            </tr>
                            <tr>
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
    