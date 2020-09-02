<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            // Primero, definir llave foranea
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_announcement');
            //referecia a llave foranea
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_announcement')->references('id')->on('announcements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_products');
    }
}
