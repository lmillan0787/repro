<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicaIndigena extends Model
{
    use HasFactory;

    protected $table = 'musica_indigenas';

     protected $fillable = [

        'artista_id',
        'nombre_cancion',
        'url'

     ];
}
