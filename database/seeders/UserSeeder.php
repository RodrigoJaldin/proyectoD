<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Diego Jaldin',
            'email' => 'diego@gmail.com',
            'password' => bcrypt('1234'),
            'genero' => 'masculino',
        ]);

        User::create([
            'name' => 'Camila reyes',
            'email' => 'camila@gmail.com',
            'password' => bcrypt('1234'),
            'genero' => 'femenino',
        ]);
    }
}
