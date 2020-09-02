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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paymentmethod_id');
            //forean key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paymentmethod_id')->references('id')->on('payment_methods');
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
