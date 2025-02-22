<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Director extends Model
{
    use HasFactory;

    protected $table = 'directores';

    /**
     * Illuminate\Database\Eloquent\Relations\HasMany;
     * Relación HasMany con el modelo Pelicula
     * @return HasMany<Pelicula, Director>
     */
    public function peliculas():HasMany{
        return $this->hasMany(Pelicula::class, 'director_id');
    }

}
