@extends('layouts.plantilla_general')

@section('title', 'Registro')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Registro de producto</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS DATOS DEL PRODUCTO
    </div>

    <div class="card-body">
        <form action="/guardar_productos" method="GET">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre_Producto" placeholder="Introduce el Nombre del Producto"
                    value="{{ old('txtNombre_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">No. Serie:</label>
                <input type="text" class="form-control" name="txtNo.Serie_producto" placeholder="Introduce el No. Serie del Producto"
                    value="{{ old('txtNo.Serie_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNo.Serie_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Marca:</label>
                <input type="text" class="form-control" name="txtMarca_producto" placeholder="Introduce la Marca del Producto"
                    value="{{ old('txtMarca_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtMarca_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Cantidad:</label>
                <input type="text" class="form-control" name="txtCantidad_producto" placeholder="Introduce la Cantidad del Producto"
                    value="{{ old('txtCantidad_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCantidad_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Costo:</label>
                <input type="text" class="form-control" name="txtCosto_producto" placeholder="Introduce el Costo del Producto"
                    value="{{ old('txtCosto_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCosto_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio de Venta:</label>
                <input type="text" class="form-control" name="txtPrecioVenta_producto" placeholder="Introduce el Precio de Venta del Producto"
                    value="{{ old('txtPrecioVenta_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtPrecioVenta_producto') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de Compra:</label>
                <input type="date" class="form-control" name="txtFechaCompra_producto" placeholder="Introduce la Fecha de Compra del Producto"
                    value="{{ old('txtFechaCompra_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtFechaCompra_producto') }}</p>
            </div>



            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
</div>


@endsection
