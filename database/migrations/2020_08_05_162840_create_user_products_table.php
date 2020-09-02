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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('announcement_id');
            //referecia a llave foranea
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('announcement_id')->references('id')->on('announcements');
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
