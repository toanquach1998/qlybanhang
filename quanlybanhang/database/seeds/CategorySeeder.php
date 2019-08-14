<?php

use Illuminate\Database\Seeder;
use function PHPSTORM_META\type;

class CategorySeeder extends Seeder
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
       $types = ["Hành động", "Thể thao", "Kinh dị", "Trưởng thành", "Trí tuệ", 
                     "Thủ thành", "FPS", "Chiến thuật", "Cờ"];
        sort($types);
    
        for ($i=1; $i <= 100; $i++) {
            array_push($list, 
            [
                'id'                => $i,
                'category_code'     =>'code'.$i,
                'category_name'     => $faker->randomElement($types),
                'description'       => $faker->text(500),
                'image'             => $faker->imageUrl(300, 300)
            ]);
        }
        DB::table('categories')->insert($list);
    }
    
}
