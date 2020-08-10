<?php

use Illuminate\Database\Seeder;
use App\UserAddress;
class UserAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserAddress::class, 10)->create();
    }
}
