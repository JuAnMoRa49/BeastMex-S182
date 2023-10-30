@extends('layouts.plantilla_general')

@section('title','Consulta de Venta')

@section('contenido')

<div class="container">
        <h1 style="text-align: center">Gestión de Ventas</h1>

        <!-- Formulario para registrar una nueva venta -->
        <div class="card">
            <div class="card-header text-center">{{ __('Procesamiento de Ventas a Clientes') }}</div>

            <div class="card-body">
                <form method="POST" action="/guardarVenta">
                    @csrf
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <select class="form-control" name="cliente" id="cliente">
                            <!-- Opciones para seleccionar un cliente -->
                            <option value="cliente1">Cliente 1</option>
                            <option value="cliente2">Cliente 2</option>
                            <!-- Agrega más opciones según tus clientes -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productos" class="form-label">Productos Disponibles</label>
                        <select class="form-control" name="productos" id="productos" multiple>
                            <!-- Opciones para seleccionar productos disponibles -->
                            <option value="producto1">Producto 1</option>
                            <option value="producto2">Producto 2</option>
                            <!-- Agrega más opciones según tus productos -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ old('cantidad') }}">
                    </div>
                    <!-- Otros campos de venta, como fecha, detalles de productos, etc. -->
                    <button type="submit" class="btn btn-primary btn-block">Guardar Venta</button>
                </form>
            </div>
        </div>

        <!-- Tabla para mostrar las ventas registradas -->
        <h2>Registros de Ventas</h2>
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
                <!-- Aquí puedes iterar y mostrar las ventas registradas -->
                <tr>
                    <td>1</td>
                    <td>Cliente 1</td>
                    <td>2023-10-28</td>
                    <td>Producto 1, Producto 2</td>
                    <td>$100.00</td>
                </tr>
                <!-- Agrega más filas según tus ventas registradas -->
            </tbody>
        </table>
    </div>
@endsection