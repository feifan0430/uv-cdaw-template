<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_playlist', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("listname")->nullable();
            $table->string("creator")->nullable();
            $table->string("introduction")->nullable();
            $table->string("createdtime")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_playlist');
    }
}
