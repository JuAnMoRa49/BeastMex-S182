@extends('layouts.plantilla_general')

@section('title','Consulta de Venta')

@section('contenido')

<div class="container">
    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">Consulta de Ventas</h1>

    <div class="card">
        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">No. Venta o Fecha:</label>
                <input type="text" class="form-control" name="txtConsulta_Venta" placeholder="Introduce el No. de Venta o la Fecha de venta dd/mm/aaaa"
                    value="{{ old('txtConsulta_Venta') }}">
            </div>

            <div class="card-body mt-3">
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
                                <td>123450987</td>
                                <td>Jose Eduardo</td>
                                <td>09/07/2023</td>
                                <td>$3,500</td>
                                <td><button type="submit" class="btn btn-primary">Ver ticket</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
