@extends('layouts.plantilla_general')

@section('title', 'Registro Venta')

@section('contenido')

@if(session()->has('confirmacion_regi_vent'))
    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_vent') }}','success')</script>
@endif

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Registro de Venta</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="/chec_vent">
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
                    <input type="text" name='producto' class="form-control" placeholder="Buscar producto por nombre" id="producto" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="buscarProducto">Buscar</button>
                </div>

                <div class="card-body mt-3">
                    <h3>Resultados de la búsqueda</h3>
                    <div id="resultadosBusqueda"></div>
                </div>

                <button type="submit" class="btn btn-primary">Ir al carrito</button>

            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#buscarProducto').click(function () {
            let nombreProducto = $('#producto').val();
            $.ajax({
                type: 'GET',
                url: '/buscar_producto',
                data: { nombre: nombreProducto },
                success: function (response) {
                    $('#resultadosBusqueda').html(response);
                }
            });
        });
    });
</script>

@endsection
