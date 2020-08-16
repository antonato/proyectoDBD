<?php

use Illuminate\Database\Seeder;

class TransactionProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\transactionProduct::class, 10)->create();
    }
}
