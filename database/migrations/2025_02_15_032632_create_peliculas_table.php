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
            $table->foreignId('director_id')->nullable();

            $table->string('titulo');
            $table->string('titulo_alternativo')->nullable();
            $table->year('ano_estreno')->nullable();
            $table->text('sinopsis')->nullable();
            $table->smallInteger('duracion')->nullable();
            $table->text('url_poster_tmdb')->nullable();
            $table->text('url_backdrop_tmdb')->nullable();
            $table->integer('tmdb_id')->nullable();
            $table->timestamps();

            $table->foreign('director_id')->references('id')->on('directores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropForeign(['director_id']);
        Schema::dropIfExists('peliculas');
    }
};
