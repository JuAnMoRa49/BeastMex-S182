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
            <form method="POST" action="{{ route('guardarVenta') }}">

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
                    <select name="producto" class="form-select" id="producto" aria-label="Selecciona un producto">
                        <option value="" selected>Selecciona un producto</option>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}" data-cantidad="{{ $producto->cantidad }}" data-precio="{{ $producto->precio_venta }}">
                                {{ $producto->nombre_producto }}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-secondary" type="button" id="buscarProducto">Buscar</button>
                </div>

                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad Disponible:</label>
                    <span id="cantidadSeleccionada"></span>
                </div>

                <div class="mb-3">
                    <label for="precioVenta" class="form-label">Precio de Venta:</label>
                    <span id="precioVentaSeleccionado"></span>
                </div>

                <div class="mb-3">
                    <label for="cantidadInput" class="form-label">Cantidad a Vender:</label>
                    <input type="number" class="form-control" name="cantidadInput" id="cantidadInput" min="1" required>
                    <span id="errorCantidad" class="text-danger"></span>
                </div>

                <div class="mb-3">
                    <label for="totalVenta" class="form-label">Total Venta:</label>
                    <span id="totalVenta"></span>
                    <!-- Agrega el campo oculto para totalVenta -->
                    <input type="hidden" name="totalVenta" id="totalVentaInput">
                </div>


            </form>

            <a href="{{ route('mostrarTicketsVenta') }}" class="btn btn-success">Ver Tickets de Venta</a>
            
        </div>
    </div>
</div>

<script>
    function actualizarCantidadPrecioSeleccionada() {
        var select = document.getElementById('producto');
        var cantidadSpan = document.getElementById('cantidadSeleccionada');
        var precioSpan = document.getElementById('precioVentaSeleccionado');
        var cantidadInput = document.getElementById('cantidadInput');
        var errorCantidad = document.getElementById('errorCantidad');
        var totalVentaSpan = document.getElementById('totalVenta');

        var cantidadSeleccionada = select.options[select.selectedIndex].dataset.cantidad;
        var precioVentaSeleccionado = select.options[select.selectedIndex].dataset.precio;

        cantidadSpan.innerText = 'Cantidad Disponible: ' + cantidadSeleccionada;
        precioSpan.innerText = 'Precio de Venta: ' + precioVentaSeleccionado;

        cantidadInput.max = cantidadSeleccionada;
    }

    function calcularTotalVenta() {
        var cantidadInput = document.getElementById('cantidadInput');
        var precioVentaSeleccionado = document.getElementById('precioVentaSeleccionado').innerText;
        var errorCantidad = document.getElementById('errorCantidad');
        var totalVentaSpan = document.getElementById('totalVenta');

        var cantidadDisponible = parseFloat(document.getElementById('cantidadSeleccionada').innerText.split(": ")[1]);
        var cantidadAVender = parseFloat(cantidadInput.value);
        var precioVenta = parseFloat(precioVentaSeleccionado.split(": ")[1]);

        if (cantidadAVender > cantidadDisponible) {
            errorCantidad.innerText = 'Error: La cantidad a vender no puede ser mayor que la cantidad disponible.';
            totalVentaSpan.innerText = ''; // Limpiar el total si hay un error
        } else {
            errorCantidad.innerText = ''; // Limpiar el mensaje de error si no hay error
            var totalVenta = cantidadAVender * precioVenta;
            totalVentaSpan.innerText = 'Total Venta: ' + totalVenta.toFixed(2);
            
            // Actualizar el valor del campo oculto 'totalVentaInput'
            document.getElementById('totalVentaInput').value = totalVenta.toFixed(2);
        }
    }

    document.getElementById('producto').addEventListener('change', function () {
        actualizarCantidadPrecioSeleccionada();
        calcularTotalVenta();
    });

    document.getElementById('cantidadInput').addEventListener('input', calcularTotalVenta);

    window.onload = function() {
        actualizarCantidadPrecioSeleccionada();
    };
</script>

@endsection
