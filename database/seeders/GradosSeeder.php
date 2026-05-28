<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('grados')->count() === 0) {
            DB::table('grados')->insert([
                [
                    'nombre' => 'Noveno',
                    'created_at' => now(),
                ],
                [
                    'nombre' => 'Décimo',
                    'created_at' => now(),
                ],
                [
                    'nombre' => 'Once',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
