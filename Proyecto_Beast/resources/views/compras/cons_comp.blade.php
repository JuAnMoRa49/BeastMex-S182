@extends('layouts.plantilla_general')

@section('title','Consulta Compras')

@section('contenido')

    <h1 class="display-4 text-center mt-5 mb-5">Consulta de Compras</h1>

    @if(session()->has('confirmacion_cons_comp'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_comp') }}','success')</script>

    @endif

    <div class="card text-center">

        <div class="card-body">
            <form method="GET" action="/cons_comp_espe">
                @csrf

                <div class="mb-3">
                    <label for="search_id" class="form-label">Buscar por ID de Compra</label>
                    <input type="numeric" class="form-control" name="search_id" id="search_id" value="{{ request('search_id') }}">
                    <p class="text-danger fst-italic">{{ $errors->first('search_id') }}</p>
                    <button type="submit" class="btn btn-primary mt-2">Buscar</button>
                </div>
            </form>

    <div class="card-body mt-3">
    <h3>Resultados de la búsqueda</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table table-dark">
                <tr>
                    <th>ID Compra</th>
                    <th>Proveedor</th>
                    <th>Fecha</th>
                    <th>Productos</th>
                    <th>Total</th>
                </tr>
            </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Proveedor {{ chr(64 + ($i % 26)) }}</td>
                    <td>2023-10-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</td>
                    <td><button type="submit" class="btn btn-primary btn-block">Ver pedido</button></td>
                    <td>${{ $i * 100 }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>


@endsection