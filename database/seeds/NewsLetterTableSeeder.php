<?php

use App\Src\Newsletter;
use Illuminate\Database\Seeder;

class NewsLetterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Newsletter::class,10)->create();
    }
}
