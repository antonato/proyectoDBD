<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_products', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->unsignedBigInteger('idTransaction');
            $table->unsignedBigInteger('idAnnouncement');
            $table->foreign('idTransaction')->references('id')->on('transactions');
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
        Schema::dropIfExists('transaction_products');
    }
}
