<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id');
            $table->date('since');
            $table->date('to');
            $table->date('DateTransaction');
            $table->timestamps();
            // Primero, definir llave foranea
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_paymentmethod');
            //forean key
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_paymentmethod')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
