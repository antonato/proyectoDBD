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
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idAnnouncement');
            //referecia a llave foranea
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idAnnouncement')->references('id')->on('announcements');
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
