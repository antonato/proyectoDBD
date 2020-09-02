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
            $table->string('NameProduct', 50);
            $table->string('Category', 20);
            $table->float('Price', 4, 2);
            $table->date('PriceXTime');
            $table->string('Description', 256);
            $table->boolean('Disponibility');
            $table->integer('QualificationAverage');
            $table->string('ImageFormat');
            $table->date('PublishedTime');
            
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
