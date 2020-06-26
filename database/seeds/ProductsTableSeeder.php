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
            'description' => 'This necklace was found in the Titanic.',
            'category_id' => 4,
            'image' => '',
            'price' => 15000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Oak Table',
            'description' => 'This table was found in the black forest, in Germany.',
            'category_id' => 1,
            'image' => '',
            'price' => 2000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Woven bag',
            'description' => 'This hand-woven bag matches your style.',
            'category_id' => 2,
            'image' => '',
            'price' => 1000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Shar Pei',
            'description' => 'This Shar Pei will decorate your garden, your neighbors will want to caress it.',
            'category_id' => 3,
            'image' => '',
            'price' => 4500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Decorative chair',
            'description' => 'This chair will decorate your rooms with class, carved with chestnut wood.',
            'category_id' => 1,
            'image' => '',
            'price' => 5000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Doll',
            'description' => 'Your children`s future favorite doll, with sustainable materials',
            'category_id' => 2,
            'image' => '',
            'price' => 1500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Snail',
            'description' => 'This snail will not eat your flowers, with their beauty alone they will make them more beautiful.',
            'category_id' => 3,
            'image' => '',
            'price' => 7500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Amethyst bracelet',
            'description' => 'If the amethyst is your birthstone, it will bring you happiness and prosperity, and if it is not, you will also have it.',
            'category_id' => 4,
            'image' => '',
            'price' => 9000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Tourmaline necklace',
            'description' => 'If you want to be the most elegant of the club social gathering, do not hesitate to buy this tourmaline necklace, it will attract everyone´s attention.',
            'category_id' => 4,
            'image' => '',
            'price' => 30000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Fish mural',
            'description' => 'If you like fish but do not have time to have an aquarium, do not hesitate, with this beautiful mural you will have the sea in your house.',
            'category_id' => 3,
            'image' => '',
            'price' => 40000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Antistress balls',
            'description' => 'If you feel stressed with these balls, you will feel relaxed again, made with sustainable materials and natural dyes.',
            'category_id' => 2,
            'image' => '',
            'price' => 800,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Harp table',
            'description' => 'This table, recycling elements from the harp, will be the center of attention in your living room.',
            'category_id' => 1,
            'image' => '',
            'price' => 87800,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Shelving',
            'description' => 'With this shelf you can order the books you have read or pretend to have read.',
            'category_id' => 1,
            'image' => '',
            'price' => 7500,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Leather bag',
            'description' => 'This leather bag, with all its pockets, will be the ideal travel companion.',
            'category_id' => 2,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Rings',
            'description' => 'This collection of rings, with natural stones, will decorate your hands.',
            'category_id' => 4,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Glass vase',
            'description' => 'This vase will decorate your apartment with its hand-painted crystals.',
            'category_id' => 3,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
    }
}