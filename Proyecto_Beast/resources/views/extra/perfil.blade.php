@section('title', 'Perfil')


@extends('layouts.plantilla_general')


@section('contenido')

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                <div class="contenedor_perfil">
                    <div class="foto">
                        <i class="user"></i>
                    </div>
    
                    <div class="datos">
                        <label class="label">Nombre:</label>
                        <p class="p">Juan Montoya</p>
    
                        <label class="label">Puesto:</label>
                        <p class="p">Administrador</p>
    
                        <label class="label">Email:</label>
                        <p class="p">juan@beast.com</p>
    
                        <label class="label">Contraseña:</label>
                        <p class="p">************</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
