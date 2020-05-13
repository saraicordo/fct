<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Furniture']);
        Category::create(['name' => 'Textile']);
        Category::create(['name' => 'Ceramics']);
        Category::create(['name' => 'Jewelry']);
    }
}
