<?php

use App\Models\Album;
use App\Models\Gallery;
use App\Models\Image;
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
        factory(Album::class, 12)->create()->each(function ($a) {
            $a->gallery()->save(factory(Gallery::class)->create());
        });
    }
}
