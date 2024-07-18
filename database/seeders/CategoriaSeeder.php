<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Noticia',
        ]);
        Categoria::create([
            'nombre' => 'Tecnología',
        ]);
        Categoria::create([
            'nombre' => 'Reglamento',
        ]);
        Categoria::create([
            'nombre' => 'Rumores',
        ]);
    }
}
