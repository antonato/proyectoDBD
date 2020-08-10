<?php

use Illuminate\Database\Seeder;
use App\productComment;

class ProductCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\productComment::class, 10)->create();
    }
}
