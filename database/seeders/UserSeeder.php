<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Three Dog night',
            'email' => 'three@mail.ru',
            'photo' => 'dynamic/three-dog-night.png',
            'password' => Hash::make('123'),
        ]);

        User::factory()->create([
            'username' => 'tata',
            'email' => 'tata@mail.ru',
            'photo' => 'dynamic/bongo-cat.jpg',
            'password' => Hash::make('123'),
        ]);

//        User::factory(10)->create();
    }
}
