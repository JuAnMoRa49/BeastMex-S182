@extends('layuots.platilla')
@section('titulo','registro')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Reporte de Ventas</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Filtros de Búsqueda</h2>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="search_cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" name="search_cliente" id="search_cliente" value="{{ request('search_cliente') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="search_fecha" class="form-label">Fecha de Venta</label>
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
                        <label for="search_total" class="form-label">Total de Venta</label>
                        <input type="number" class="form-control" name="search_total" id="search_total" step="0.01" value="{{ request('search_total') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <h2>Resultados del Reporte</h2>
                </div>
                <div class="col-md-12">
                    <!-- Tabla de Ventas con datos estáticos -->
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>ID Venta</th>
                                <th>Cliente</th>
                                <th>Fecha de Venta</th>
                                <th>Producto(s)</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>Cliente {{ $i }}</td>
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
    </div>
</div>
@endsection