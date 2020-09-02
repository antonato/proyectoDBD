<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('country', 65);
            $table->string('region');
            $table->string('street');
            // Primero, definir llave foranea
            $table->unsignedBigInteger('id_announcement');
            // Referencia llave foranea
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
        Schema::dropIfExists('announcement_addresses');
    }
}
