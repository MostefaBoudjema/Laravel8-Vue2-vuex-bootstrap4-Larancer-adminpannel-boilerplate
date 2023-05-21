<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('123456789'), 'remember_token' => '',],
            ['id' => 2, 'name' => 'mostfa','email' => 'myreal17@gmail.com','password' => Hash::make('123456789'), 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
