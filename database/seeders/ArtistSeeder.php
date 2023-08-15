<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = [
            [
                'id'          => 1,
                'artist_name' => 'Iron Maiden',
                'photo_url'   => 'https://th.bing.com/th/id/R.f3a31abc1ea005f6ad76017436e178e0?rik=JBIi2BI%2fn3mS8w&pid=ImgRaw&r=0',
                'style_id'    => 1,
                'created_at'  => now()
            ],
            [
                'id'          => 2,
                'artist_name' => 'Judas Priest',
                'photo_url'   => 'https://th.bing.com/th/id/R.fe8276c79da4c63e0d529154557e3e97?rik=4wwhwab3xHCXDA&pid=ImgRaw&r=0',
                'style_id'    => 1,
                'created_at'  => now()
            ],
            [
                'id'          => 3,
                'artist_name' => 'Richie Ray & Bobby Cruz',
                'photo_url'   => 'https://th.bing.com/th/id/R.bfbc262d320b9b66b38a7cd47f900c64?rik=589O%2f49r37lvpg&pid=ImgRaw&r=0',
                'style_id'    => 2,
                'created_at'  => now()
            ],
            [
                'id'          => 4,
                'artist_name' => 'Fernandito Villalona',
                'photo_url'   => 'https://th.bing.com/th/id/R.5562c14f60e41a4c3d5fa2028c84d986?rik=H2Pev0zhTWtq6g&riu=http%3a%2f%2ftropicalisima104.com%2fwp-content%2fuploads%2f2015%2f06%2fFernando_Villalona.jpg&ehk=SlbeytbFd1oeVK%2fBUs20HR4wuwq3CsMuZ%2f1QTrHyfGU%3d&risl=&pid=ImgRaw&r=0',
                'style_id'    => 3,
                'created_at'  => now()
            ],
            [
                'id'          => 5,
                'artist_name' => 'Sergio Vargas',
                'photo_url'   => 'https://th.bing.com/th/id/R.1671892f216d6611cea5a7fba9fa2e58?rik=Bamd22n5kNljRA&pid=ImgRaw&r=0',
                'style_id'    => 3,
                'created_at'  => now()
            ]

        ];

        foreach ($artists as $artist) {
            Artist::create($artist);
        }
    }
}
