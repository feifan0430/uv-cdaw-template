<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCommentary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_commentary', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("media_id");
            $table->string("author")->nullable();
            $table->string("content")->nullable();
            $table->string("visibility")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_commentary');
    }
}
