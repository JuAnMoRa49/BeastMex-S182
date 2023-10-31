@extends('layouts.plantilla_general')

@section('title', 'Registro Venta')

@section('contenido')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Registro de Venta</h1>
        </div>
        <div class="card-body">
            <form method="GET" action="/save_vent">
                @csrf

                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="cliente" id="cliente" required>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                </div>

                <div class="card-body mt-3">
                    <h3>Resultados de la búsqueda</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Producto</th>
                                    <th>Marca</th>
                                    <th>Disponibles</th>
                                    <th>Precio</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PC</td>
                                    <td>PHP</td>
                                    <td>9</td>
                                    <td>$34,000</td>
                                    <td>
                                        <a href="/" class="btn btn-success">Añadir al carrito</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <button type="button" class="btn btn-primary">Ir al carrito</button>

            </form>
        </div>
    </div>
</div>
@endsection
