<?php

use App\Models\Gallery;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $tables = [
        'users',
        'posts',
        'sections',
        'pages',
        'categories',
        'galleries',
        'images',
        'contactus',
        'newsletter'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() === 'local') {

            $this->emptyTables($this->tables);
            Model::unguard();


            $this->call(UsersTableSeeder::class);


            $this->call(GalleriesTableSeeder::class);

            $this->call(CategoriesTableSeeder::class);
            $this->call(PostsTableSeeder::class);
            $this->call(PagesTableSeeder::class);
            $this->call(AlbumsTableSeeder::class);

            $this->call(SlidersTableSeeder::class);
            $this->call(NewsLetterTableSeeder::class);
            $this->call(SectionsTableSeeder::class);
            $this->call(ContactusTableSeeder::class);


        } elseif (app()->environment() === 'production') {
            $this->emptyTables($this->tables);
            Model::unguard();
            $this->call(UsersTableSeeder::class);
            $this->call(ContactusTableSeeder::class);

        }

    }


    public function emptyTables($tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($tables as $table) {

            DB::table($table)->truncate();

        }

    }
}
