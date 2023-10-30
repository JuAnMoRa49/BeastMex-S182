
@extends('layouts.plantilla_general')

@section('title','registro')

@section('contenido')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;">Registro de Venta</h1>
        </div>
        <div class="card-body">
            <!-- Formulario de registro de venta -->
            <form method="POST" action="/registrar-venta">
                @csrf
                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="cliente" id="cliente" required>
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                </div>
                <div class="mb-3">
                    <label for="productos" class="form-label">Productos (separados por comas)</label>
                    <textarea class="form-control" name="productos" id="productos" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" class="form-control" name="total" id="total" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Venta</button>
            </form>
        </div>
    </div>
</div>
@endsection