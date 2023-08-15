<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

     protected $fillable = [
        'song_name',
        'album_id',
        'artist_id',
        'song_url'
     ];

     public function artist()
     {
        return $this->belongsTo(Artist::class);
     }

     public function album()
     {
        return $this->belongsTo(Albums::class);
     }
}
