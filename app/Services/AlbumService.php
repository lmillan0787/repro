<?php

namespace App\Services;

use App\Models\Album;

class AlbumService
{
    public function getALbumByArtist($id)
    {
       return Album::where('artist_id', $id)->get();
    }

    public function getLatestAlbums()
    {
      return Album::latest()->take(5)->get();
    }

    public function getLatestAlbumsByStyle($styleId)
    {
        return Album::join('artists', 'albums.artist_id', '=' ,'artists.id')->where('style_id', $styleId)->take(5)->get();
    }

}
