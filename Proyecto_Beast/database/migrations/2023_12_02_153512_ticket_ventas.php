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
        Schema::create('ticket_ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('datos_cliente');
            $table->string('productos');
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->decimal('total_venta', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_ventas');
    }
};
