<?php

namespace Database\Seeders;

use App\Models\Mascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mascota::create([
            'nombre' => 'Max',
            'talla' => 'mediano',
            'edad' => 3,
            'tipo' => 'perro',
        ]);

        Mascota::create([
            'nombre' => 'Bella',
            'talla' => 'pequeño',
            'edad' => 2,
            'tipo' => 'perro',
        ]);

        Mascota::create([
            'nombre' => 'Charlie',
            'talla' => 'grande',
            'edad' => 5,
            'tipo' => 'perro',
        ]);

        Mascota::create([
            'nombre' => 'Lucy',
            'talla' => 'mediano',
            'edad' => 4,
            'tipo' => 'perro',
        ]);

        Mascota::create([
            'nombre' => 'Cooper',
            'talla' => 'pequeño',
            'edad' => 1,
            'tipo' => 'perro',
        ]);

        // Crear 5 gatos
        Mascota::create([
            'nombre' => 'Luna',
            'talla' => 'pequeño',
            'edad' => 2,
            'tipo' => 'gato',
        ]);

        Mascota::create([
            'nombre' => 'Simba',
            'talla' => 'mediano',
            'edad' => 3,
            'tipo' => 'gato',
        ]);

        Mascota::create([
            'nombre' => 'Oliver',
            'talla' => 'largo',
            'edad' => 5,
            'tipo' => 'gato',
        ]);
    }
}
