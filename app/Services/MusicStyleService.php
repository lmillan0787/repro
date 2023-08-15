<?php

namespace App\Services;

use App\Models\MusicStyle;

class MusicStyleService
{
    public function getMusicStyles()
    {
       return MusicStyle::all();
    }

    public function getLatestMusicStyles()
    {
       return MusicStyle::latest()->take('5')->get();
    }
}
