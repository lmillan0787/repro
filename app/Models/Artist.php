<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_name',
        'photo_url',
        'style_id'
    ];

    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }

    public function musicStyle(): BelongsToMany
    {
        return $this->belongsToMany(MusicStyle::class);
    }

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }
}
