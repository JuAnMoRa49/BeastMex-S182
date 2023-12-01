@extends('layouts.plantilla_general')

@section('title', 'Carrito Venta')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Carrito de Venta</h1>

<div class="card text-center">

    <div class="card-body mt-3">
        <h3>Productos en Carrito</h3>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>

                <tr>
                    <td>Mouse</td>
                    <td>Lenovo</td>
                    <td>12</td>
                    <td>250</td>
                    <td>
                        <a href="/edit_prov" class="btn btn-warning">Editar</a>
                        <a href="/dele_prov" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            </table>
            <a href="/edit_prov" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>

    

        

@endsection