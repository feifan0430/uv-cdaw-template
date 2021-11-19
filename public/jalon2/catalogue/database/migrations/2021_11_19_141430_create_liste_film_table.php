<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste_film', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            // $table->integer('filmID');
            $table->string('director')->nullable();
            $table->integer('category_id')->nullable();
            // $table->string('releaseTime');
            // $table->string('runtimeStr');
            // $table->string('plot');
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
        Schema::dropIfExists('liste_film');
    }
}
