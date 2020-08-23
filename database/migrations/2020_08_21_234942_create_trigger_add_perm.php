<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAddPerm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE OR REPLACE FUNCTION addPerm() RETURNS trigger AS $paAddPerm$
            DECLARE lastID INT;
            BEGIN
                SELECT * INTO lastID FROM permissions ORDER BY id DESC LIMIT 1;
                INSERT INTO rol_permissions (idperm, idrol) VALUES (lastID, 1);
                RETURN New;
            END;
            $paAddPerm$
            LANGUAGE plpgsql;
        ');

        DB::unprepared('
            CREATE TRIGGER tg_addPerm
            AFTER INSERT ON permissions
            FOR EACH ROW
            EXECUTE PROCEDURE addPerm();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tg_addPerm');
    }
}