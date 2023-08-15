<?php

namespace Database\Seeders;

use App\Models\MusicStyle;
use Illuminate\Database\Seeder;

class MusicStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $styles = [
            [
                'id'          => 1,
                'style_name'  => 'Heavy Metal',
                'created_at'  => now(),
            ],
            [
                'id'          => 2,
                'style_name'  => 'Salsa',
                'created_at'  => now(),
            ],
            [
                'id'          => 3,
                'style_name'  => 'Merengue',
                'created_at'  => now(),
            ],

        ];

        foreach ($styles as $style) {
            MusicStyle::create($style);
        }
    }
}
