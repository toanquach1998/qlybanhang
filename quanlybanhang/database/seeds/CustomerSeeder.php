<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
        
    
        for ($i=1; $i <= 100; $i++) {
            array_push($list, 
            [
                'id'                         => $i,
                'last_name'                  => $faker->text(191),
                'first_name'                 => $faker->text(191),
                'email'                      => $faker->text(191),
                'company'                    => $faker->text(200),
                'phone'                      => $faker->text(15),
                'address1'                   => $faker->text(200),
                'address2'                   => $faker->text(200),
                'city'                       => $faker->text(200),
                'state'                      => $faker->text(200),
                'postal_code'                => $faker->text(15),
                'country'                    => $faker->text(200),
              
              
                ]);
        }
        DB::table('customers')->insert($list);  
    }
}
