<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = [
            [
                'id'        => 1,
                'song_name' => 'The Wickerman',
                'album_id'  => 1,
                'artist_id' => 1,
                'song_url'  => ''
            ],
            [
                'id'        => 2,
                'song_name' => 'Ghost Of The Navigator',
                'album_id'  => 1,
                'artist_id' => 1,
                'song_url'  => ''
            ],
            [
                'id'        => 3,
                'song_name' => 'The Trooper',
                'album_id'  => 2,
                'artist_id' => 1,
                'song_url'  => ''
            ],
            [
                'id'        => 4,
                'song_name' => 'Still Life',
                'album_id'  => 2,
                'artist_id' => 1,
                'song_url'  => ''
            ],
            [
                'id'        => 5,
                'song_name' => 'Metal Meltdown',
                'album_id'  => 3,
                'artist_id' => 2,
                'song_url'  => ''
            ],
            [
                'id'        => 6,
                'song_name' => 'Painkiller',
                'album_id'  => 3,
                'artist_id' => 2,
                'song_url'  => ''
            ],
            [
                'id'        => 7,
                'song_name' => 'Sonido Bestial',
                'album_id'  => 4,
                'artist_id' => 3,
                'song_url'  => ''
            ],
            [
                'id'        => 8,
                'song_name' => 'Guaguancó Triste',
                'album_id'  => 4,
                'artist_id' => 3,
                'song_url'  => ''
            ],
            [
                'id'        => 9,
                'song_name' => 'Cama y Mesa',
                'album_id'  => 5,
                'artist_id' => 4,
                'song_url'  => ''
            ],
            [
                'id'        => 10,
                'song_name' => 'Feliz Cumbé',
                'album_id'  => 5,
                'artist_id' => 4,
                'song_url'  => ''
            ],
            [
                'id'        => 11,
                'song_name' => 'Si algun dia la ves',
                'album_id'  => 6,
                'artist_id' => 5,
                'song_url'  => ''
            ],
            [
                'id'        => 12,
                'song_name' => 'La tierra temblo',
                'album_id'  => 6,
                'artist_id' => 5,
                'song_url'  => ''
            ],

        ];

        foreach($songs as $song){
            Song::create($song);
        }
    }
}
