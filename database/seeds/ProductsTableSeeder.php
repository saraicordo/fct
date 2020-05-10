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
            'name' => 'Producto 1',
            'description' => 'Esto es la descripción del producto',
            'category_id' => 1,
            'image' => '',
            'price' => 15000,
            'user_id' => 2
        ]);
    }
}