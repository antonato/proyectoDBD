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
            $table->id('id');
            $table->string('NameProduct');
            $table->float('price', 4, 2);
            $table->integer('QualificationAverage');
            $table->boolean('Disponibility');
            $table->string('ImageFormat');
            $table->string('Description');
            $table->date('PublishedTime',);
            $table->string('Category');
            $table->timestamps();
            
            // Primero, definir llave foranea
            //$table->unsignedBigInteger('idCategory');
            //referecia a llave foranea
            //$table->foreign('idCategory')->references('id')->on('categories');
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
