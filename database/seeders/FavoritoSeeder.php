<?php

namespace Database\Seeders;

use App\Models\Favorito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favorito::create([

            'user_id' => '1',
            'mascota_id' => '2',
        ]);
        Favorito::create([

            'user_id' => '1',
            'mascota_id' => '3',
        ]);
    }
}
