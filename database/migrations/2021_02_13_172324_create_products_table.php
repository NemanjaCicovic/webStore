<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->double('price');
            $table->string('description');
            $table->string('url');
            $table->string('ram');
            $table->string('memory');
            $table->string('screen_size');
            $table->string('camera');
            $table->string('front_camera');
            $table->string('battery');
            $table->string('system');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
