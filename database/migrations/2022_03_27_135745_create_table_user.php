<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->char('username');
            $table->char('password');
            $table->char('full_name');
            $table->integer('phone');
            $table->dateTime('birthday');
            $table->char('sex');
            $table->unsignedBigInteger('id_address');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_address')->references('id')->on('addresss');
            $table->foreign('id_role')->references('id')->on('roles');
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
        Schema::dropIfExists('user');
    }
}
