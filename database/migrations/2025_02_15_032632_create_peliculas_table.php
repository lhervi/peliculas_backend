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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('titulo_alternativo');
            $table->year('ano_estreno');
            $table->text('sinopsis')->nullable();
            $table->smallInteger('duracion')->nullable();
            $table->text('url_poster_tmdb')->nullable();
            $table->text('url_backdrop_tmdb')->nullable();
            $table->integer('tmdb_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
