<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('NameProduct', 50);
            $table->float('price', 4, 2);
            $table->integer('QuialificationAverage');
            $table->tinyInteger('Disponibility');
            $table->string('ImageFormat', 4);
            $table->string('Description', 100);
            $table->date('PublishedTime',);
            $table->timestamps();
            // Primero, definir llave foranea
            $table->unsignedBigInteger('idCategory');
            //referecia a llave foranea
            $table->foreign('idCategory')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
