<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'nombre' => 'admin',
            'descripcion' => 'Usuario administrador',
        ]);
        Rol::create([
            'nombre' => 'user',
            'descripcion' => 'Usuario común',
        ]);
    }
}
