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
        Schema::create('carrito_items', function (Blueprint $table) {
            $table->integer('id_carrito_item', true)-> primary(); // Clave primaria autoincremental
            $table->foreign('id_carrito')->nullable(); // Clave foránea que referencia a `carrito`
            $table->foreign('id_producto')->nullable(); // Clave foránea que referencia a `productos`
            $table->integer('cantidad')->nullable(); // Cantidad del producto
            $table->decimal('precio', 10, 2)->nullable(); // Precio del producto
    
            // Definir claves foráneas
            $table->foreign('id_carrito')->references('id_carrito')->on('carrito')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_items');
    }
};
