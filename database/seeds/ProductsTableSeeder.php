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
            'name' => 'Collar Titanic',
            'description' => 'Este collar fue encontrado en el Titanic.',
            'category_id' => 4,
            'image' => '',
            'price' => 15000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Mesa de roble',
            'description' => 'Esta tabla fue encontrada en el bosque negro, en Alemania.',
            'category_id' => 1,
            'image' => '',
            'price' => 2000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Bolso de punto',
            'description' => 'Este bolso tejido a mano combina con tu estilo.',
            'category_id' => 2,
            'image' => '',
            'price' => 1000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Shar Pei',
            'description' => 'Este Shar Pei decorará tu jardín, tus vecinos querrán acariciarlo.',
            'category_id' => 3,
            'image' => '',
            'price' => 4500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Silla decorativa',
            'description' => 'Esta silla decorará tus habitaciones con clase, tallada en madera de castaño.',
            'category_id' => 1,
            'image' => '',
            'price' => 5000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Muñeca',
            'description' => 'La futura muñeca favorita de tus hijos, con materiales sostenibles',
            'category_id' => 2,
            'image' => '',
            'price' => 1500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Caracol',
            'description' => 'Este caracol no se comerá tus flores, solo con su belleza las hará más hermosas.',
            'category_id' => 3,
            'image' => '',
            'price' => 7500,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Bracalete de amatista',
            'description' => 'Si la amatista es su piedra de nacimiento, le traerá felicidad y prosperidad, y si no lo es, también la tendrá',
            'category_id' => 4,
            'image' => '',
            'price' => 9000,
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Colgate de Turmalina',
            'description' => 'Si quieres ser el más elegante de la reunión social del club, no dudes en comprar este collar de turmalina, atraerá la atención de todos.',
            'category_id' => 4,
            'image' => '',
            'price' => 30000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Mural de peces',
            'description' => 'Si te gustan los peces pero no tienes tiempo para tener un acuario, no lo dudes, con este hermoso mural tendrás el mar en tu casa.',
            'category_id' => 3,
            'image' => '',
            'price' => 40000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Bolas antiestres',
            'description' => 'Si te sientes estresado con estas bolas, te sentirás relajado nuevamente, hecho con materiales sostenibles y tintes naturales.',
            'category_id' => 2,
            'image' => '',
            'price' => 800,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Mesa de arpa',
            'description' => 'Esta mesa, que recicla elementos del arpa, será el centro de atención en su sala de estar.',
            'category_id' => 1,
            'image' => '',
            'price' => 87800,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Estantería',
            'description' => 'Con este estante puede ordenar los libros que ha leído o pretender haber leído.',
            'category_id' => 1,
            'image' => '',
            'price' => 7500,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Bolso de cuero',
            'description' => 'Este bolso de cuero, con todos sus bolsillos, será el compañero de viaje ideal..',
            'category_id' => 2,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Anillos',
            'description' => 'Esta colección de anillos, con piedras naturales, decorará tus manos..',
            'category_id' => 4,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
        Product::create([
            'name' => 'Florero de vidrio',
            'description' => 'Este jarrón decorará tu apartamento con sus cristales pintados a mano.',
            'category_id' => 3,
            'image' => '',
            'price' => 6000,
            'user_id' => 2,
        ]);
    }
}