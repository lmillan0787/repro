<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ArtistSeeder;
use Database\Seeders\MusicStyleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            MusicStyleSeeder::class,
            ArtistSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            UserSeeder::class
        ]);
    }
}
