<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
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
        $types = ["RIOT", "GARENA", "GAMELOT", "SEGA", "EG", 
                      ];
        sort($types);
    
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'id'                => $i,
                'supplier_code'     =>'code'.$i,
                'supplier_name'     => $types[$i-1],
                'description'       => $faker->text(500),
                'image'             => $faker->imageUrl(300, 300)
            ]);
        }
        DB::table('suppliers')->insert($list);
    }
}
