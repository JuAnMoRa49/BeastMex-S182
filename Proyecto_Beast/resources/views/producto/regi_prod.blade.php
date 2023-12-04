@extends('layouts.plantilla_general')

@section('title', 'Registro Productos')

@section('contenido')

<div class="contenedor">

    <h1 class="title">Registro de producto</h1>

    @if(session()->has('confirmacion_regi_prod'))
        <script>Swal.fire('Buen Trabajo!', '{{ session('confirmacion_regi_prod') }}', 'success')</script>
    @endif

    <div class="form">

        <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="dato">
                <label class="dato_txt">Nombre:</label>
                <input class="dato_input" type="text" name="txtNombre_Producto"
                       placeholder="Introduce el Nombre del Producto" value="{{ old('txtNombre_Producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNombre_Producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">No. Serie:</label>
                <input class="dato_input" type="number" class="form-control" name="txtNoSerie_producto"
                       placeholder="Introduce el No. Serie del Producto" value="{{ old('txtNoSerie_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtNoSerie_producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Marca:</label>
                <input class="dato_input" type="text" class="form-control" name="txtMarca_producto"
                       placeholder="Introduce la Marca del Producto" value="{{ old('txtMarca_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtMarca_producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Cantidad:</label>
                <input class="dato_input" type="number" class="form-control" name="txtCantidad_producto"
                       placeholder="Introduce la Cantidad del Producto" value="{{ old('txtCantidad_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCantidad_producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Costo:</label>
                <input class="dato_input" type="number" step="0.01" class="form-control" name="txtCosto_producto"
                       placeholder="Introduce el Costo del Producto" value="{{ old('txtCosto_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtCosto_producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Fecha de Compra:</label>
                <input class="dato_input" type="date" class="form-control" name="txtFechaCompra_producto"
                       placeholder="Introduce la Fecha de Compra del Producto"
                       value="{{ old('txtFechaCompra_producto') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtFechaCompra_producto') }}</p>
            </div>

            <div class="dato">
                <label class="dato_txt">Foto:</label>
                <input class="dato_input" type="file" name="foto" accept="image/*">
                <p class="text-danger fst-italic">{{ $errors->first('foto') }}</p>
            </div>

            <div class="">
                <button class="boton-guardar" type="submit">
                    Guardar
                </button>
            </div>

            @if(session()->has('confirmacion_regi_prod'))
                <div class="alert alert-success mt-3">
                    {{ session('confirmacion_regi_prod') }}
                </div>
            @endif

        </form>

        <a href="{{ route('lista_productos') }}" class="btn btn-secondary">
        Ir a la lista de productos
    </a>

    </div>

</div>

@endsection
