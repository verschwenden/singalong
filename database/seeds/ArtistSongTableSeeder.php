<?php

use Illuminate\Database\Seeder;

class ArtistSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist_song')->insert([
            'artist_id' => 1,
            'song_id' => 1,
        ]);
    }
}
