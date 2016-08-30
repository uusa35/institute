<?php

use App\Gallery;
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
        factory(\App\Src\Gallery::class,50)->create();
        factory(\App\Src\Image::class,50)->create();
    }
}
