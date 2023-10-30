
@extends('layouts.plantilla_general')

@section('title','registro')

@section('contenido')

<div class="container">
    <h1 
    style="text-align: center;"
    >Consulta de Ventas</h1>
    

    <!-- Formulario de búsqueda de ventas -->
    <form method="GET" action="/consulta-ventas">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="search_id" class="form-label">Buscar por ID de Venta</label>
                    <input type="text" class="form-control" name="search_id" id="search_id" value="{{ request('search_id') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="search_cliente" class="form-label">Buscar por Cliente</label>
                    <input type="text" class="form-control" name="search_cliente" id="search_cliente" value="{{ request('search_cliente') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="search_fecha" class="form-label">Buscar por Fecha</label>
                    <input type="date" class="form-control" name="search_fecha" id="search_fecha" value="{{ request('search_fecha') }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <!-- Tabla para mostrar las ventas registradas (datos estáticos) -->
    <table class="table">
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Productos</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Cliente {{ $i }}</td>
                    <td>2023-10-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                    <td>Producto 1, Producto 2, Producto 3</td>
                    <td>${{ $i * 1000 }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection