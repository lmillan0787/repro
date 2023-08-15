<?php

namespace App\Services;

use App\Models\Song;

class SongService
{
    public function getSongsByArtist($id)
    {
       return Song::where('artist_id', $id)->get();
    }

    public function getSongsByAlbum($id)
    {
       return Song::where('album_id', $id)->get();
    }

    public function getLatestSongs()
    {
      return Song::latest()->take(5)->get();
    }

    public function getLatestSongssByStyle($styleId)
    {
        return Song::join('artists', 'songs.artist_id', '=' ,'artists.id')->where('style_id', $styleId)->take(5)->get();
    }

}
