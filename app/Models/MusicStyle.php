<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MusicStyle extends Model
{
    use HasFactory;

    protected $fillable = ['style_name'];

    public function artist(): HasMany
    {
        return $this->hasMany(Artist::class);
    }
}
