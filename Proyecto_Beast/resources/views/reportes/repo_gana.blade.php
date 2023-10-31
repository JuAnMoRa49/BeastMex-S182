@extends('layouts.plantilla_general')

@section('title','Reporte Ventas')

@section('contenido')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Consulta de Ganancias</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Filtros de Búsqueda</h2>
                </div>
                <div class="col-md-6">
                    <!-- Formulario para seleccionar un mes -->
                    <form id="selectMonthForm">
                        <div class="form-group">
                            <label for="month">Selecciona un mes:</label>
                            <select class="form-control" id="month">
                                <option value="01">Enero</option>
                                <option value="02">Febrero</option>
                                <option value="03">Marzo</option>
                                <option value="04">Abril</option>
                                <option value="05">Mayo</option>
                                <option value="06">Junio</option>
                                <option value="07">Julio</option>
                                <option value="08">Agosto</option>
                                <option value="09">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="generateChart()">Generar Gráfica</button>
                    </form>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <h2>Resultados del Reporte de Ganancia</h2>
                </div>
              
                <div class="col-md-12 text-center">
                    <!-- Imagen "grafica.png" debajo del título -->
                    <img src="https://tudashboard.com/wp-content/uploads/2021/03/grafica-de-barras.png" alt="Gráfica de ejemplo" class="img-center" />
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Clase para centrar la imagen */
    .img-center {
        display: block;
        margin: 0 auto;
    }
</style>

@endsection
