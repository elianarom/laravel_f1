<?php

namespace Database\Seeders;

use App\Models\Suscripcion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suscripcion::create([
            'plan' => 'Basic',
            'descripcion' => '',
            'precio' => 0,
        ]);
        Suscripcion::create([
            'plan' => 'Medium',
            'descripcion' => '',
            'precio' => 5,
        ]);
        Suscripcion::create([
            'plan' => 'Gold',
            'descripcion' => '',
            'precio' => 10,
        ]);
    }
}
