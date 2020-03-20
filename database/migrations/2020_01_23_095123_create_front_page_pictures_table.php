<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontPagePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_page_pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc');
            $table->string('size');
            $table->string('vendor');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('location')->nullable();
            $table->mediumText('image');
            $table->mediumText('image1');
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product_types');

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
        Schema::dropIfExists('front_page_pictures');
    }
}
