<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!Usuario::where('correo', 'junior.arias02yt@gmail.com')->exists()) {
            Usuario::create([
                'nombre' => 'Junior Arias',
                'correo' => 'junior.arias02yt@gmail.com',
                'password' => 'qweasdzxc', // Se hasheará automáticamente gracias al cast 'hashed' en el modelo Usuario
                'rol' => 'ADMIN',
                'estado' => 'ACTIVO',
            ]);
        }

        $this->call([
            GradosSeeder::class,
            MateriasSeeder::class,
            PeriodosSeeder::class,
        ]);
    }
}
