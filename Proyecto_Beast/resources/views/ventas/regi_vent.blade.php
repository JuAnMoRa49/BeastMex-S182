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
                    <input type="text" name='producto' id="buscar-producto" class="form-control" placeholder="Buscar producto" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="buscarProducto()">Buscar</button>
                </div>

                <div class="card-body mt-3">
                    <h3>Resultados de la búsqueda</h3>
                    <div id="resultados-busqueda">
                        <!-- Aquí se mostrarán los resultados de la búsqueda -->
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ir al carrito</button>

            </form>
        </div>
    </div>
</div>

<script>
    function buscarProducto() {
        var inputProducto = $('#buscar-producto').val();

        // Realiza la solicitud AJAX al servidor
        $.ajax({
            type: 'GET',
            url: '/buscar-producto/' + inputProducto, // Ajusta la ruta según tu configuración de rutas
            success: function (data) {
                // Actualiza la sección de resultados con la respuesta del servidor
                $('#resultados-busqueda').html(data);
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    }
</script>

@endsection
