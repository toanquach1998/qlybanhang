<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
                'username'                   => $faker->text(191),
                'last_name'                  => $faker->text(191),
                'first_name'                 => $faker->text(191),
                'email'                      => $faker->text(191),
                'avatar'                     => $faker->text(200),
                'password'                   => $faker->text(200),
                'job_title'                  => $faker->text(200),
                'department'                 => $faker->text(200),
                'manager_id'                 => $faker->numberBetween(0,100),
                'phone'                      => $faker->text(15),
                'address1'                   => $faker->text(200),
                'address2'                   => $faker->text(200),
                'city'                       => $faker->text(200),
                'state'                      => $faker->text(200),
                'postal_code'                => $faker->text(15),
                'country'                    => $faker->text(200),
                'remember_token'             => $faker->text(200)
              
                ]);
        }
        DB::table('employees')->insert($list);  
            
    }
}
