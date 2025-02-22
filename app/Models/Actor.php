<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actores';

    /**
     * Obtiene las películas en las que participa el actor <Actor, Pelicula>
     * Relación "Belongs To Many" con el modelo Pelicula.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Pelicula, Actor>
     */
    public function peliculas():BelongsToMany{
        return $this->belongsToMany(Pelicula::class, 'actor_pelicula', 'actor_id', 'pelicula_id');
    }

}
