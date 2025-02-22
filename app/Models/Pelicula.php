<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function director():BelongsTo {
        return $this->belongsTo(Director::class);
    }

    /**
     * Obtiene los géneros a los que pertenece la película.
     * Relación "Belongs To Many" con el modelo Genero.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function generos ():BelongsToMany{
        return $this->belongsToMany(Genero::class, 'genero_pelicula', 'pelicula_id', 'genero_id');
    }

    /**
     * Obtiene los visionados de la película.
     * Relación "Has Many" con el modelo Visionado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visionados():HasMany{
        return $this->hasMany(Visionado::class);
    }

    /**
     * Obtiene las reseñas de la película.
     * Relación "Has Many" con el modelo Resena.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resenas():HasMany{
        return $this->hasMany(Resena::class);
    }




}
