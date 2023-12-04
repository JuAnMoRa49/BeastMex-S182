@extends('layouts.plantilla_general')

@section('title', 'Registro Compra')

@section('contenido')
<div class="container">
    <h1 class="display-4 text-center mt-5 mb-5">Registro de Compra</h1>

    @if(session()->has('confirmacion_regi_comp'))

        <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_regi_comp') }}','success')</script>

    @endif

    

    <div class="card text-center">
        <div class="card-header">
            INTODUCE LOS DATOS DE LA COMPRA
        </div>

        <div class="card-body">
            <form method="GET" action="/save_comp">
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
                    <input type="text" name='producto' class="form-control" placeholder="Buscar producto" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="sumit" id="button-addon2">Buscar</button>
                </div>

                <table class="table table-striped">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    @foreach ($consultaCompras as $item)
                        <tbody>
                            
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->producto_compra}}</td>
                                <td>{{$item->nombre_cliente}}</td>
                                <td>{{$item->fecha_compra}}</td>
                                <td><button type="button" class="btn btn-success">Añadir a solicitud</button></td>
                            </tr>
                            
                        </tbody>
                    @endforeach
                </table>

                <button type="sumit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
