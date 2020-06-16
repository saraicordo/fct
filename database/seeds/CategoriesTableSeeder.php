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
        Category::create(['name' => 'Madera']);
        Category::create(['name' => 'Téxtiles']);
        Category::create(['name' => 'Ceramica']);
        Category::create(['name' => 'Joyería']);
    }
}
