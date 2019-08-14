<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN'); //locate 150
        $list = [];
        
        $listEmployees = DB::table('employees')->pluck('id');
        $listCustomers = DB::table('customers')->pluck('id');
    
        for ($i=1; $i <= 100; $i++) {
            array_push($list, 
            [
                'id'                         => $i,
                'order_date'                 => $faker->date($format = 'Y-m-d', $max = 'now'),
                'shipped_date'               => $faker->date($format = 'Y-m-d', $max = 'now'),
                'ship_name'                  => $faker->text(50),
                'ship_addrees1'              => $faker->text(191),
                'ship_addrees2'              => $faker->text(200),
                'ship_city'                  => $faker->text(200),
                'ship_state'                 => $faker->text(200),
                'ship_postal_code'           => $faker->text(25),
                'ship_country'               => $faker->numberBetween(50),
                'shipping_fee'               => $faker->randomFloat(100000 , 100000, 1000000),
                'payment_type'               => $faker->text(200),
                
                'order_status'               => $faker->text(50),
               //Khoa ngoai
               'employee_id'                => $faker-> randomElement($listEmployees),
               'customer_id'                => $faker-> randomElement($listCustomers),   
              
                ]);
        }
        DB::table('orders')->insert($list);  
    }
}
