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
            'plan' => 'Plan básico',
            'descripcion' => 'Podés publicar noticias.',
            'precio' => 100,
        ]);
        Suscripcion::create([
            'plan' => 'Plan Medium',
            'descripcion' => 'Podés publicar y editar tus noticias.',
            'precio' => 150,
        ]);
        Suscripcion::create([
            'plan' => 'Plan Gold',
            'descripcion' => 'Podés publicar, editar y eliminar tus noticias.',
            'precio' => 230,
        ]);
    }
}
