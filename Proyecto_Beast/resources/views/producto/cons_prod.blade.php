@extends('layouts.plantilla_general')

@section('title', 'Consulta Productos')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Consulta de producto</h1>

<div class="card text-center">

    <div class="card-body">
        <form action="/consulta_producto_especifico" method="GET">
            @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre o No. de Serie:</label>
            <input type="text" class="form-control" name="txtConsulta_Producto" placeholder="Introduce el Nombre o No. de Serie del Producto"
                value="{{ old('txtConsulta_producto') }}">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary btn-lg" type="submit">
                Buscar
            </button>
        </div>
        </form>
        <div>
            
        </div>
    </div>

            <div class="card-body mt-3">
                <h3>Resultados de la búsqueda</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                            <tr>
                                <th>Producto</th>
                                <th>No. Serie</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Precio de Venta</th>
                                <th>Fecha</th>
                                <th>Foto</th>
                            </tr>
                            <tr>
                                <td>Mouse</td>
                                <td>1234567890</td>
                                <td>Lenovo</td>
                                <td>34</td>
                                <td>250</td>
                                <td>450</td>
                                <td>20/10/2017</td>
                                <td>Img</td>
                            </tr>
                    </table>
                </div>
            </div>


 @endsection