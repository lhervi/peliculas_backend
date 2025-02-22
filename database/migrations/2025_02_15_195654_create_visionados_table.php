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
        Schema::create('visionados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id')->constrained()->cascadeOnDelete();
            $table->foreignId('usuario_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamp('fecha_visionado')->nullable();
            $table->string('formato_visionado')->nullable();
            $table->string('lugar_visionado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropForeign(['pelicula_id', 'usuario_id']);
        Schema::dropIfExists('visionados');
    }
};
