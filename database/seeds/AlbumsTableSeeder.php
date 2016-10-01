<?php

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Album::class,12)->create();
    }
}
