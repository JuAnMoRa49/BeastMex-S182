@extends('layouts.plantilla_general')

@section('title', 'Registro Compra')

@section('contenido')
<div class="container">
    <h1 class="display-4 text-center mt-5 mb-5">Registro de Compra</h1>

    <div class="card text-center">
        <div class="card-header">
            INTODUCE LOS DATOS DE LA COMPRA
        </div>

        <div class="card-body">
            <form method="GET" action="/save_vent">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre del cliente</label>
                    <input type="text" class="form-control" name="cliente" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                </div>

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
                            <td>Pc</td>
                            <td>PhP</td>
                            <td>9</td>
                            <td>$120,000</td>
                            <td><button type="button" class="btn btn-success">Añadir a solicitud</button></td>
                        </tr>
                        <tr>
                            <td>Teclado</td>
                            <td>PhP</td>
                            <td>3</td>
                            <td>$1,200</td>
                            <td><button type="button" class="btn btn-success">Añadir a solicitud</button></td>
                        </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
