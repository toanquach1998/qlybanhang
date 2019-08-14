<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
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
        
        $listOrders = DB::table('orders')->pluck('id');
        $listProducts = DB::table('products')->pluck('id');
    
        for ($i=1; $i <= 100; $i++) {
            array_push($list, 
            [
        
                'quantity'      => $faker->randomFloat(50000 , 50000, 10000000),
                'unit_price'         => $faker->randomFloat(50000 , 50000, 10000000),
                'discount'           => $faker->numberBetween(0,100),
                'order_detail_status'        => $faker->text(10),
                'date_allocated'        => $faker->date($format = 'Y-m-d', $max = 'now'),
                //Khóa ngoại
                    'order_id'       => $faker-> randomElement($listOrders),
                    'product_id'        => $faker-> randomElement($listProducts),
            
            ]);
        }
        DB::table('orders_details')->insert($list);
    }
}
