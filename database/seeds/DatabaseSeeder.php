<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnnouncementTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(RolPermissionTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductCommentTableSeeder::class);
        $this->call(UserAddressTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
