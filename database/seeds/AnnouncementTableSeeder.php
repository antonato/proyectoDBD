<?php

use Illuminate\Database\Seeder;
use App\Announcement;

class AnnouncementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Announcement::class, 10)->create();
    }
}
