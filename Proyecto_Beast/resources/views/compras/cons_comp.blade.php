@extends('layouts.plantilla_general')

@section('title','Consulta Compras')

@section('contenido')

<div class="container">
        <h1 style="text-align: center;">Consulta de Compras</h1>

        <!-- Formulario de búsqueda por ID -->
        <form method="GET" action="/cons_comp">
            <div class="mb-3">
                <label for="search_id" class="form-label">Buscar por ID de Compra</label>
                <input type="text" class="form-control" name="search_id" id="search_id" value="{{ request('search_id') }}">
                <button type="submit" class="btn btn-primary mt-2">Buscar</button>
            </div>
        </form>

        <!-- Tabla para mostrar las compras registradas (datos estáticos) -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Compra</th>
                    <th>Proveedor</th>
                    <th>Fecha</th>
                    <th>Productos</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 50; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>Proveedor {{ chr(64 + ($i % 26)) }}</td>
                        <td>2023-10-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                        <td>Producto {{ $i * 2 - 1 }}, Producto {{ $i * 2 }}</td>
                        <td>${{ $i * 100 }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection