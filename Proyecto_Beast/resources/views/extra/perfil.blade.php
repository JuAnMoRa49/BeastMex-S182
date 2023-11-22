@extends('layouts.plantilla_general')

@section('title', 'Perfil')

@section('contenido')

<div class="contenedor_perfil">

    <div class="foto">
        <img src="{{ asset('images/35.jpg') }}" alt="Foto">
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

@endsection
