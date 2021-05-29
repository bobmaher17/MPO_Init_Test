<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table){
            $table->increments('id');
            $table->integer('barcode');
            $table->integer('jumlah');
            $table->float('total_harga', 8, 2);
            $table->integer('ready');
            $table->integer('onhold');
            $table->integer('delivered');
            $table->integer('packing');
            $table->integer('sent');
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
        Schema::dropIfExists('order');
    }
}
