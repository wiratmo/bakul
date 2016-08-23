<?php

use Illuminate\Database\Seeder;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=0; $i <20 ; $i++) { 
        	App\Product::create([
        		'user_id'=> 1,
        		'product_category'=> $faker->numberBetween($min = 1, $max = 3),
        		'product_name'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
        		'stock'=> $faker->numberBetween($min = 1, $max = 50),
        		'price'=> $faker->numberBetween($min = 10000, $max = 5000000),
        		'condition'=> $faker->randomElement($array = array ('New','Second')),
        		'weight'=> $faker->numberBetween($min = 1, $max = 10),
        		'size'=> $faker->numberBetween($min = 10, $max = 20)
        		]);
        }
    }
}
