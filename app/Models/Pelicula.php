<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //
    use HasFactory;

    protected $table = 'peliculas';

     /**
     * Obtiene el director que dirige la película.
     * Relación "Belongs To" con el modelo Director.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function director() {
        return $this->belongsTo(Director::class);
    }

    /**
     * Obtiene los géneros a los que pertenece la película.
     * Relación "Belongs To Many" con el modelo Genero.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function generos (){
        return $this->belongsToMany(Genero::class, 'genero_pelicula');
    }

    /**
     * Obtiene los visionados de la película.
     * Relación "Has Many" con el modelo Visionado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visionados(){
        return $this->hasMany(Visionado::class);
    }

    /**
     * Obtiene las reseñas de la película.
     * Relación "Has Many" con el modelo Resena.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resenas(){
        return $this->hasMany(Resena::class);
    }


}
