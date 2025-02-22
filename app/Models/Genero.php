<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genero extends Model
{

    use HasFactory;

    protected $table = 'generos';

    /**
     * Obtiene las películas que pertenecen a este género
     * * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<Pelicula, <Pelicula, Genero>
     */
    public function peliculas():BelongsToMany{
        return $this->belongsToMany(Pelicula::class, 'genero_pelicula', 'genero_id', 'pelicula_id');
    }

}
