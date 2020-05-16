<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Titanic Necklace',
            'description' => 'This necklace was found in the Titanic',
            'category_id' => 4,
            'image' => '',
            'price' => 15000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Oak Table',
            'description' => 'This table was found in the black forest, in Germany',
            'category_id' => 1,
            'image' => '',
            'price' => 2000,
            'user_id' => 1,
        ]);
    }
}