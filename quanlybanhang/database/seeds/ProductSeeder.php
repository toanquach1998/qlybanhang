<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
        
        $listCategories = DB::table('categories')->pluck('id');
        $listSuppliers = DB::table('suppliers')->pluck('id');
    
        for ($i=1; $i <= 100; $i++) {
            array_push($list, 
            [
                'id'                 => $i,
                'product_code'       => $faker->numerify('product_#######'),
                'product_name'       => $faker->text(10),
                'image'              => $faker->imageUrl(300, 300),
                'description'        => $faker->text(200),
                'standard_cost'      => $faker->randomFloat(50000 , 50000, 10000000),
                'list_price'         => $faker->randomFloat(50000 , 50000, 10000000),
                'quantity_per_unit'  => $faker->numberBetween(1,100),
                'discountinued'      => $faker->numberBetween(0,1),
                'discount'           => $faker->numberBetween(0,100),

                //Khóa ngoại
                'category_id'       => $faker-> randomElement($listCategories),
                'supplier_id'        => $faker-> randomElement($listSuppliers),
            
            ]);
        }
        DB::table('products')->insert($list);
    }
}
