<?php

namespace Database\Seeders;

use App\Models\Escuderia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscuderiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Escuderia::create([
            'name' => 'Red Bull',
        ]);
        Escuderia::create([
            'name' => 'Ferrari',
        ]);
        Escuderia::create([
            'name' => 'Mercedes',
        ]);
        Escuderia::create([
            'name' => 'Aston Martin',
        ]);
        Escuderia::create([
            'name' => 'McLaren',
        ]);
        Escuderia::create([
            'name' => 'Alpine',
        ]);
        Escuderia::create([
            'name' => 'Williams',
        ]);
        Escuderia::create([
            'name' => 'RB Visa Cash App',
        ]);
        Escuderia::create([
            'name' => 'Kick Sauber',
        ]);
        Escuderia::create([
            'name' => 'Haas',
        ]);
    }
}
