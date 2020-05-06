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
        Category::create(['name' => 'Mesas']);
        Category::create(['name' => 'Sillas']);
        Category::create(['name' => 'Abanicos']);
        Category::create(['name' => 'Jabones']);
        Category::create(['name' => 'Cestas']);
        Category::create(['name' => 'Brazaletes']);
        Category::create(['name' => 'Collares']);
        Category::create(['name' => 'Muñecos']);
        Category::create(['name' => 'Bolsas']);
        Category::create(['name' => 'Cerámicas']);
        Category::create(['name' => 'Cervezas']);
        Category::create(['name' => 'Cinturones']);
        Category::create(['name' => 'Carpetas']);
        Category::create(['name' => 'Zapatos']);
        Category::create(['name' => 'Carteras']);
        Category::create(['name' => 'Sombreros']);
        Category::create(['name' => 'Herramientas']);
        Category::create(['name' => 'Maletines']);
        Category::create(['name' => 'Maletas']);
    }
}
