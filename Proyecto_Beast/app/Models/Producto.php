<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'no_serie',
        'marca',
        'cantidad',
        'costo_compra',
        'precio_venta',
        'fecha_ingreso',
        'foto', // Agrega la columna 'foto' al array $fillable
    ];

    // Puedes agregar relaciones o métodos adicionales aquí según sea necesario
}
