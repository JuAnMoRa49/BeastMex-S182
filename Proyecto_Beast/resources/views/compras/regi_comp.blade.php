
@extends('layouts.plantilla_general')

@section('title','Registro de Compras')

@section('contenido')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Reporte de Compras</h1>
        </div>
        <div class="card-body">
            <!-- Filtros de búsqueda -->
            <form method="GET" action="/save_comp">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="search_proveedor" class="form-label">Proveedor</label>
                            <input type="text" class="form-control" name="search_proveedor" id="search_proveedor" value="{{ request('search_proveedor') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="search_fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="search_fecha" id="search_fecha" value="{{ request('search_fecha') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="search_producto" class="form-label">Producto</label>
                            <input type="text" class="form-control" name="search_producto" id="search_producto" value="{{ request('search_producto') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="search_total" class="form-label">Total</label>
                            <input type="number" class="form-control" name="search_total" id="search_total" step="0.01" value="{{ request('search_total') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>

            <!-- Tabla de compras con datos estáticos -->
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID Compra</th>
                        <th>Proveedor</th>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Proveedor {{ $i }}</td>
                            <td>2023-10-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                            <td>Producto {{ $i }}</td>
                            <td>${{ $i * 1000 }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection