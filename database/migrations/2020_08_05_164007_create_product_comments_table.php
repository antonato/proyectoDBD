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
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_announcement');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_announcement')->references('id')->on('announcements');
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
