<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('picture_id');
            $table->integer('cart_id');
            $table->string('picture_desc');
            $table->integer('picture_price');
            $table->string('picture_size');
            $table->integer('picture_quantity');
            $table->integer('seller_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('available_orders');
    }
}
