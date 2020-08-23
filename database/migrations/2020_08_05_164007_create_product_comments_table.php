<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id('id');
            $table->string('content');
            $table->integer('qualification');
            $table->date('publishedTime');
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idAnnouncement');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idAnnouncement')->references('id')->on('announcements');
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
        Schema::dropIfExists('product_comments');
    }
}
