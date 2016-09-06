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
            $table->string('mobile')->default(0);
            $table->string('description_ar')->default(0);
            $table->string('description_en')->default(0);
            $table->string('video_link')->default(0);
            $table->string('other_link')->default(0);
            $table->string('pdf');
            $table->string('type')->default('user');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->boolean('active')->default(1);
            $table->enum('subscribed', ['free', 'paid'])->default('free');
            $table->integer('membership_id')->unsigned()->index()->default(0);


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
