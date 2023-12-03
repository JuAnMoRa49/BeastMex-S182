<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dpto_almacen', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('no_serie');
            $table->string('marca');
            $table->integer('cantidad');
            $table->decimal('costo_compra', 10, 2);
            $table->decimal('precio_venta', 10, 2);
            $table->date('fecha_ingreso');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dpto_almacen');
    }
};














