<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_property', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('image_id')->unsigned();
            $table->integer('property_id')->unsigned();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_property');
    }
}
