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
        Usuario::updateOrCreate(
            ['correo' => 'junior.arias02yt@gmail.com'],
            [
                'nombre' => 'Junior Arias',
                'password' => 'qweasdzxc',
                'rol' => 'ADMIN',
                'estado' => 'ACTIVO',
            ]
        );

        Usuario::updateOrCreate(
            ['correo' => 'nicolledayana901@gmail.com'],
            [
                'nombre' => 'Nicolle Dayana',
                'password' => 'dayana221008',
                'rol' => 'ADMIN',
                'estado' => 'ACTIVO',
            ]
        );

        Usuario::updateOrCreate(
            ['correo' => 'mariaoliveros03@gmail.com'],
            [
                'nombre' => 'María Oliveros',
                'password' => 'mariaoliveros03',
                'rol' => 'ADMIN',
                'estado' => 'ACTIVO',
            ]
        );

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
