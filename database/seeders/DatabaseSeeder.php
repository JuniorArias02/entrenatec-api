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

        if (!Usuario::where('correo', 'nicolledayana901@gmail.com')->exists()) {
            Usuario::create([
                'nombre' => 'Nicolle Dayana',
                'correo' => 'nicolledayana901@gmail.com',
                'password' => 'nicol123',
                'rol' => 'ADMIN',
                'estado' => 'ACTIVO',
            ]);
        }

        $this->call([
            GradosSeeder::class,
            MateriasSeeder::class,
            PeriodosSeeder::class,
            TecnologiaNovenoP1Seeder::class,
            TecnologiaNovenoP2Seeder::class,
            TecnologiaNovenoP3Seeder::class,
            TecnologiaNovenoP4Seeder::class,
            TecnologiaDecimoP1Seeder::class,
            TecnologiaDecimoP2Seeder::class,
            TecnologiaDecimoP3Seeder::class,
            TecnologiaDecimoP4Seeder::class,
            TecnologiaOnceP1Seeder::class,
            TecnologiaOnceP2Seeder::class,
            TecnologiaOnceP3Seeder::class,
            TecnologiaOnceP4Seeder::class,
            CuadroTeoricoSeeder::class,
            JuegosYEvaluacionesSeeder::class,
        ]);
    }
}
