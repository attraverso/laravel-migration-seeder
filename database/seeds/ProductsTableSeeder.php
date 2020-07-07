<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker) {
		
		$all_products = config('products_list');

		foreach ($all_products as $product) {
			$newProduct = new Product();
			$newProduct->code = $product['code'];
			$newProduct->type = $product['type'];
			$newProduct->year = $product['year'];
			$newProduct->save();
		}

		for ($i=0; $i < 10; $i++) { 
			$currentProduct = new Product();
			$currentProduct->code = $faker->randomNumber($nbDigits = 8);
			$currentProduct->type = $faker->randomNumber($nbDigits = 4);
			$currentProduct->year = $faker->year;
			$currentProduct->save();
		}
	}
}
