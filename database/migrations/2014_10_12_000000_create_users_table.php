<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar');
            $table->string('password');
            $table->string('mobile');
            $table->string('description_ar');
            $table->string('description_en');
            $table->string('video_link');
            $table->string('pdf_link');
            $table->string('other_link');
            $table->enum('type', ['free', 'paid']);
            $table->boolean('active');
            $table->boolean('subscribed');

            $table->rememberToken();
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
        Schema::drop('users');
    }

}
