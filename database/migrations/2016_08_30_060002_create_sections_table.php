<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header_ar');
            $table->string('header_en');
            $table->mediumText('content_ar');
            $table->mediumText('content_en');
            $table->string('image');
            $table->string('pdf');
            $table->enum('type',['a','b','c']);
            $table->integer('page_id')->unsigned()->index();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('sections');
    }
}
