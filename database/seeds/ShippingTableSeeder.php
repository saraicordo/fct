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
            'address' => 'C/ Temple, 4, 4ºD',
            'postal_code' => '15679',
            'city' => 'A Coruña',
            'country' => 'España'
        ]);
    }
}
