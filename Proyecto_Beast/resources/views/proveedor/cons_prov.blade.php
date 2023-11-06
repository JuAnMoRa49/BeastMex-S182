@extends('layouts.plantilla_general')

@section('title', 'Consulta Proveedores')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Consulta de Proveedor</h1>

@if(session()->has('confirmacion_cons_prov'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_prov') }}','success')</script>

@endif

<div class="card text-center">

    <div class="card-body">
        <form action="/cons_prov_espe" method="GET">
            @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre o Empresa</label>
            <input type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce el Nombre o Empresa del Proveedor"
                value="{{ old('txtConsultaProveedor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtConsultaProveedor') }}</p>
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
                        <thead class="table table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Empresa</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
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