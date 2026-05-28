<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('materias')->count() === 0) {
            DB::table('materias')->insert([
                [
                    'nombre' => 'Informática',
                    'descripcion' => 'Materia de informática, tecnología y sistemas.',
                    'estado' => 'ACTIVA',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
