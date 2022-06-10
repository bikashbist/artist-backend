<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserartistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userartists', function (Blueprint $table) {
            $table->id();
            $table->text('artist_id');
            $table->text('artistId');
            $table->text('name');
            $table->text('email');
            $table->text('detail');
            $table->text('category');
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
        Schema::dropIfExists('userartists');
    }
}
