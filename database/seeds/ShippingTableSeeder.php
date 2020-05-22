<?php

use App\Shipping;
use Illuminate\Database\Seeder;

class ShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipping::create([
            'address' => 'C/ Pedrera, 3, 4º 2ª',
            'postal_code' => '08010',
            'city' => 'Barcelona',
            'country' => 'España'
        ]);
    }
}
