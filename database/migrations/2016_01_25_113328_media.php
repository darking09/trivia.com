<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Media extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function ($table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('question_id')->unsigned();
            $table->integer('type_media_id')->unsigned();
            $table->date('created_at');
            $table->date('updated_at');
            $table->foreign('question_id')->references('id')->on('question');
            $table->foreign('type_media_id')->references('id')->on('type_media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media');
    }
}