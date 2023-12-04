@extends('layouts.plantilla_general')

@section('title','Consulta Compras')

@section('contenido')

    <h1 class="display-4 text-center mt-5 mb-5">Consulta de Compras</h1>

    <div class="card text-center">

        <div class="card-body">
            <form method="GET" action="/cons_comp_espe">
                @csrf

                <div class="mb-3">
                    <label for="search_id" class="form-label">Buscar por ID de Compra</label>
                    <input type="numeric" class="form-control" name="search_id" id="search_id"">
                    <p class="text-danger fst-italic">{{ $errors->first('search_id') }}</p>
                    
                </div>

                <button type="submit" class="btn btn-primary mt-2">Buscar</button>
            </form>

    <div class="card-body mt-3">
        
        
            
            <h3>Resultados de la búsqueda

            </h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table table-dark">
                            <tr>
                                <th>ID Compra</th>
                                <th>Proveedor</th>
                                <th>Fecha</th>
                                <th>Productos</th>
                                <th>Ver Pedido</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($variable as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre_cliente}}</td>
                                <td>{{$item->fecha_compra}}</td>
                                <td>{{$item->producto_compra}}</td>
                                <td><button type="submit" class="btn btn-primary btn-block">Ver pedido</button></td>
                            </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>
            
        
    </div>
    </div>
    </div>


@endsection