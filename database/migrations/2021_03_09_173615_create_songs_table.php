<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');
            $table->foreignId('artist_id')->constrained('artists');
            $table->foreignId('album_id')->constrained('albums');
            $table->string('song_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('songs');
    }
}
