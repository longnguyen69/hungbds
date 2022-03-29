<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->char('code');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_user');
            $table->float('gia1'); //giá khách yêu cầu
            $table->float('gia2'); // giá bán mong muốn
            $table->float('gia3'); //giá thuê mong muốn
            $table->unsignedBigInteger('id_type');  // hình thức thuê hoặc mua
            $table->dateTime('start');
            $table->dateTime('end');
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_type')->references('id')->on('types');
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
        Schema::dropIfExists('orders');
    }
}
