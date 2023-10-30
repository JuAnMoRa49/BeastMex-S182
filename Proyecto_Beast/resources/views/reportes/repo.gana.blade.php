@extends('layuots.platilla')
@section('titulo','registro')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Reporte de Ganancias</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Filtros de Búsqueda</h2>
                </div>
                <!-- Agregar filtros de búsqueda aquí (como se hizo anteriormente) -->
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Resultados del Reporte</h2>
                </div>
                <div class="col-md-12">
                    <!-- Agregar la sumatoria de ganancias totales aquí -->
                    <h3 class="mb-3">Ganancias Totales: $55,000</h3>

                    <!-- Agregar un gráfico de ganancias aquí (puede utilizar bibliotecas como Chart.js) -->

                    <!-- Tabla de Ventas con datos estáticos -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
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
</div>
@endsection