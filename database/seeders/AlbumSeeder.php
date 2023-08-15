<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                'id'              => 1,
                'album_name'      => 'Brave New World',
                'artist_id'       => 1,
                'release_date'    => '2000/05/29',
                'album_cover_url' => 'https://th.bing.com/th/id/OIP.tpX1G3_8e6bW4FlViQTAjgHaHa?pid=ImgDet&rs=1',
                'created_at'      => now()
            ],
            [
                'id'              => 2,
                'album_name'      => 'Piece of Mind',
                'artist_id'       => 1,
                'release_date'    => '1983/05/16',
                'album_cover_url' => 'https://th.bing.com/th/id/OIP.ihm1ELcJ38Nq2yJfguttywHaHa?pid=ImgDet&rs=1',
                'created_at'      => now()
            ],
            [
                'id'              => 3,
                'album_name'      => 'Painkiller',
                'artist_id'       => 2,
                'release_date'    => '1990/09/03',
                'album_cover_url' => 'https://th.bing.com/th/id/R.52341e36bf179fc443b7bfe58f5c5caf?rik=7f1I2TAwcPNeGg&pid=ImgRaw&r=0',
                'created_at'      => now()
            ],
            [
                'id'              => 4,
                'album_name'      => 'El Bestial Sonido de Richie Ray y Bobby Cruz',
                'artist_id'       => 3,
                'release_date'    => '1971/08/04',
                'album_cover_url' => 'https://th.bing.com/th/id/R.630577dbdebdf33358d0adec2f9c611b?rik=JWfhVpupPjOMyQ&pid=ImgRaw&r=0',
                'created_at'      => now()
            ],
            [
                'id'              => 5,
                'album_name'      => '¡Feliz Cumbe!',
                'artist_id'       => 4,
                'release_date'    => '1982/09/21',
                'album_cover_url' => 'https://1.bp.blogspot.com/_lZne902f0jM/TGy_2F3i03I/AAAAAAAACyM/zrbZBjh6TAc/s1600/[front].JPG',
                'created_at'      => now()
            ],
            [
                'id'              => 6,
                'album_name'      => 'La tierra Tembló',
                'artist_id'       => 5,
                'release_date'    => '1982/10/05',
                'album_cover_url' => 'https://th.bing.com/th/id/OIP.Tx7FMv3jUMDjzMBFzxLjgwHaHa?pid=ImgDet&rs=1',
                'created_at'      => now()
            ]


        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
