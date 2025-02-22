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
        Schema::create('pais_pelicula', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelicula_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pais_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropForeign(['pelicula_id','pais_id']);
        Schema::dropIfExists('pais_pelicula');
    }
};
