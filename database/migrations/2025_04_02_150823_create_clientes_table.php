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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id_cliente', true); // Clave primaria autoincremental
            $table->string('nombre', 255)->nullable(); // Nombre del cliente
            $table->string('email', 255)->unique()->nullable(); // Email único del cliente
            $table->string('password', 255)->nullable(); // Contraseña del cliente
            $table->timestamps(); // Columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
