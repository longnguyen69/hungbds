<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->dateTime('birthday');
            $table->char('sex');
            $table->char('source');
            $table->unsignedBigInteger('id_address');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_address')->references('id')->on('addresss');
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
        Schema::dropIfExists('customers');
    }
}
