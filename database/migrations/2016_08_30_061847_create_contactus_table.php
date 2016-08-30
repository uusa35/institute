<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name_ar');
            $table->string('company_name_en');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('youtube_channel');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('address_ar');
            $table->string('address_en');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('logo');
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
        Schema::drop('contactus');
    }
}
