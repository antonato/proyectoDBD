<?php

use Illuminate\Database\Seeder;
use App\AnnouncementAddress;

class AnnouncementAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AnnouncementAddress::class, 10)->create();
    }
}
