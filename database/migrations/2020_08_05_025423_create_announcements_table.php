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
            $table->string('Category');
            $table->string('NameProduct');
            $table->boolean('Disponibility');
            $table->float('price', 4, 2);
            $table->string('Description');
            $table->integer('QualificationAverage');
            $table->string('ImageFormat');
            $table->date('PublishedTime',);
            
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
        Schema::dropIfExists('announcements');
    }
}
