<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'user_id' => 1,
                'suscripcion_fk' => 3,
                'nombre' => 'Admin',
                'apellido' => 'istrador',
                'email' => 'admin@mail.com',
                'password' => \Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'suscripcion_fk' => 3,
                'nombre' => 'Eliana',
                'apellido' => 'Romero',
                'email' => 'eli@mail.com',
                'password' => \Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'suscripcion_fk' => 1,
                'nombre' => 'Felipe',
                'apellido' => 'Bla',
                'email' => 'felipe@mail.com',
                'password' => \Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'suscripcion_fk' => 2,
                'nombre' => 'Emma',
                'apellido' => 'Bortoletto',
                'email' => 'emma@mail.com',
                'password' => \Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        \DB::table('users_have_rols')->insert([
            [
                'user_fk' => 1,
                'rol_fk' => 1,
            ],
            [
                'user_fk' => 2,
                'rol_fk' => 2,
            ],
            [
                'user_fk' => 3,
                'rol_fk' => 2,
            ],
            [
                'user_fk' => 4,
                'rol_fk' => 2,
            ],
        ]);
    }
}
