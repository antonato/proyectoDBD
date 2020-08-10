<?php

use Illuminate\Database\Seeder;
use App\RolPermissions;

class RolPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RolPermissions::class, 10)->create();
    }
}
