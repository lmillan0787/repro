<?php

namespace App\Services;

use App\Models\Artist;

class ArtistService
{
    public function getArtists()
    {
       return Artist::all();
    }

    public function latestArtistForStyle($styleId)
    {
        return Artist::where('style_id', $styleId)->take(5)->get();
    }

}
