<?php

use Illuminate\Database\Seeder;
use App\Permissions;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Permissions::class, 10)->create();
    }
}
