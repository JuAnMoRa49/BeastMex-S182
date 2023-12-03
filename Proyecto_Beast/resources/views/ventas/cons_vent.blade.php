@extends('layouts.app')

@section('title','Consulta de Venta')

@section('contenido')

<div class="container">
    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">Consulta de Ventas</h1>

    @if(session()->has('confirmacion_cons_vent'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_vent') }}','success')</script>

    @endif

    <div class="card-body mt-3">
        @if(isset($venta))
            <h3 style="text-align: center; margin-bottom: 20px;">Resultados de la búsqueda</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No. Venta</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Total</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $venta->no_venta }}</td>
                            <td>{{ $venta->cliente }}</td>
                            <td>{{ $venta->fecha }}</td>
                            <td>{{ $venta->total }}</td>
                            <td><button type="submit" class="btn btn-primary">Ver ticket</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>

</div>
@endsection
