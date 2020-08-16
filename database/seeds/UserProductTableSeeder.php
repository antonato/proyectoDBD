<?php

use Illuminate\Database\Seeder;

class UserProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserProduct::class, 10)->create();
    }
}
