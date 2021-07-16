<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount');

            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineorders');
    }
}
