<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
    

    }
}
