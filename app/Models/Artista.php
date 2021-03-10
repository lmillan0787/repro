<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $table = 'artistas';

    protected $fillable = [

        'id',
        'nombre_artista',
        'foto_url'

    ];
}
