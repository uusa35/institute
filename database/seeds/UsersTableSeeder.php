<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() === 'local') {
            factory(User::class, 50)->create();
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');

            if (Schema::hasTable('users')) {
                DB::table('users')->truncate();
            }

            factory(User::class, 1)->create(['first_name' => 'dr.waleed', 'email'=>'w.almarshed@hotmail.com','password' => bcrypt('Waleed1!!5waleed')]);
            factory(User::class, 1)->create(['first_name' => 'eng.yasmeen', 'email' => 'y.malaki@hotmail.com','password' => bcrypt('Waleed1!!5waleed')]);
            factory(User::class, 1)->create(['first_name' => 'moh', 'email' => 'mgamal30@yahoo.com','password' => bcrypt('Waleed1!!5waleed')]);
        }

    }
}
