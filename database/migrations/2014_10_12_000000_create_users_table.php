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
            $table->string('country')->nullable();
            $table->string('password');
            $table->string('mobile');
            $table->longText('description_ar');
            $table->longText('description_en');
            $table->string('video_link');
            $table->string('other_link');
            $table->string('membership_id')->index()->default(0);
            $table->string('graduation_year');
            $table->text('pdf');
            $table->enum('type',['IBH', 'IBNLP','user'])->default('user');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->boolean('active')->default(1);
            $table->boolean('subscribed')->default(0);
            $table->boolean('featured')->default(0);


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
