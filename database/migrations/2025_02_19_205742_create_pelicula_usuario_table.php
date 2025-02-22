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
        Schema::create('pelicula_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade'); // Asumiendo que tu tabla de usuarios se llama 'users'

            // Clave única combinada para evitar duplicados de la misma película-usuario
            $table->unique(['pelicula_id', 'usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropForeign(['pelicula_id', 'usuario_id']);
        Schema::dropIfExists('pelicula_usuario');
    }
};
