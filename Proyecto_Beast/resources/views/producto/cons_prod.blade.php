@extends('layouts.plantilla_general')

@section('title', 'Consulta Productos')

@section('contenido')

@if(session()->has('confirmacion_cons_prod'))

    <script>Swal.fire('Buen Trabajo!','{{ session('confirmacion_cons_prod') }}','success')</script>

@endif


<div class="contenedor_consulta">

    <h1 class="title">Consulta de producto</h1>

        <div class="consulta">

            <form class="form" action="/cons_prod_espe" method="GET">
                @csrf
                
                <div class="form_consulta">
                    <label class="dato_txt">Buscar Nombre o No.Serie:</label>
                    <input class="dato_input" type="text" class="form-control" name="txtConsulta_Producto" placeholder="Introduce el Nombre o No.Serie del Producto"
                        value="{{ old('txtConsulta_producto') }}">
                        <p class="text-danger fst-italic">{{ $errors->first('txtConsulta_Producto') }}</p>
                </div>

                <div class="d-grid gap-2">
                    <button class="boton-buscar" type="submit">
                        Buscar
                    </button>
                </div>

            </form>
        


        </div>

        <div class="resultado">

            <h3 class="subtitle">Resultados de la búsqueda</h3>

            <div class="contenedor contenedor_grande">

                <table class="tabla">
                    
                    <tr class="tabla-top">
                        <th class="top_left">Producto</th>
                        <th>No. Serie</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Precio de Venta</th>
                        <th>Fecha</th>
                        <th>Foto</th>
                        <th class="top_right">Opciones</th>
                    </tr>

                    @foreach($productos as $producto)

                        <tr class="resultado_consulta">
                            <td>    
                                <a href="/cons_prod_espe" class="btn btn-link">{{ $producto->nombre_producto }}</a>
                            </td>
                            <td>1234567890</td>
                            <td>Lenovo</td>
                            <td>34</td>
                            <td>250</td>
                            <td>450</td>
                            <td>20/10/2017</td>
                            <td>Img</td>
                            <td>
                                <a href="/edit_prod" class="btn btn-warning">Editar</a>
                                <a href="/ocul_prod" class="btn btn-success">Ocultar</a>
                                <a href="/most_prod" class="btn btn-danger">Mostrar</a>
                            </td>
                        </tr>

                    @endforeach
                </table>

            </div>
        </div>
</div>


 @endsection