<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'juanitopalomo',
            'email' => 'juanitopalomo@gmail.com',
            'name' => 'Juan',
            'surname1' => 'Palomo',
            'surname2' => 'Guisante',
            'city' => 'Madrid',
            'country' => 'España',
            'password' => 'juanitopalomo81'
        ]);

        User::create([
            'username' => 'laura.belle',
            'email' => 'laura.belle@gmail.com',
            'name' => 'Laura',
            'surname1' => 'Belle',
            'surname2' => 'Bestia',
            'city' => 'Madrid',
            'country' => 'España',
            'password' => 'laurabelle2'
        ]);
    }
}