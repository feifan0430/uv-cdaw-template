<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPlaylistMerge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_playlist_merge', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("user_id")->nullable();
            $table->integer("playlist_id")->nullable();
            $table->string("introduction")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_playlist_merge');
    }
}
