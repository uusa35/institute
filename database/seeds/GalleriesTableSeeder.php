<?php

use App\Gallery;
use App\Models\Image;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Gallery::class, 50)->create()->each(function ($g) {
            return $g->images()->saveMany(factory(Image::class, 5)->create());
        });
    }
}
