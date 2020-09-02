<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permissions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_perm');
            // References
            $table->foreign('id_rol')->references('id')->on('rols');
            $table->foreign('id_perm')->references('id')->on('permissions');
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
        Schema::dropIfExists('rol_permissions');
    }
}
