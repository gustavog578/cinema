<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('genre_id');
            $table->string('name');
            $table->string('path');
            $table->string('cast');
            $table->string('direction');
            $table->string('duration');
            $table->timestamps();
           
            });
         Schema::table('movies', function($table) {
          $table->foreign('genre_id')->references('id')->on('genres');
          });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
