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
        factory(\App\Models\Gallery::class,50)->create();
    }
}
