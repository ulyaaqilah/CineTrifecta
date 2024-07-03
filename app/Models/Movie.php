<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies'; // Nama tabel yang digunakan untuk model Film

    // Attribut yang dapat diisi (fillable)
    protected $fillable = ['title', 'genre', 'premiere', 'runtime', 'imdb_score', 'language'];

}
