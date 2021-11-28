<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_media', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("imdb_id")->nullable();
            $table->string("imdb_rank")->nullable();
            $table->string("title")->nullable();
            $table->string("year")->nullable();
            $table->string("image")->nullable();
            $table->string("imdb_rating")->nullable();
            $table->string("type")->nullable();
            $table->string("duration")->nullable();
            $table->string("director")->nullable();
            $table->string("writer")->nullable();
            $table->string("stars")->nullable();
            $table->string("country")->nullable();
            $table->string("isliked")->nullable();
            $table->string("iswatched")->nullable();
            $table->string("creator")->nullable();
            $table->string("introduction")->nullable();
            $table->string("firstwatchtime")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_media');
    }
}
