@section('title', 'Perfil')


@extends('layouts.plantilla_general')


@section('contenido')

    <div class="contenedor_perfil">
        <div class="foto">
            <i class="user"></i>
        </div>

        <div class="datos">

            @if(isset($user))
            <label class="label">Nombre:</label>
            <p class="p">{{ $user->name }}</p>
        
            <label class="label">Puesto:</label>
            <p class="p">{{ $user->puesto }}</p>
        
            <label class="label">Email:</label>
            <p class="p">{{ $user->email }}</p>

            <label class="label">Rol:</label>
            <p class="p">{{ $user->rol }}</p>
        
            <label class="label">Contraseña:</label>
            <p class="p">{{ $user->password }}</p>


            
            @endif
        </div>
        
    </div>

@endsection
