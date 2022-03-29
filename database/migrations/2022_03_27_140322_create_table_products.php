<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
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
            $table->char('code');
            $table->char('name');
            $table->char('view');
            $table->char('huong');
            $table->char('noithat');
            $table->integer('sophongngu');
            $table->integer('sophongtam');
            $table->integer('tang');
            $table->float('dientich');
            $table->float('gia');
            $table->unsignedBigInteger('id_address');
            $table->unsignedBigInteger('id_toa');
            $table->char('status');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_address')->references('id')->on('addresss');
            $table->foreign('id_toa')->references('id')->on('buildings');
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
        Schema::dropIfExists('products');
    }
}
