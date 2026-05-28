<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('periodos')->count() === 0) {
            DB::table('periodos')->insert([
                [
                    'numero' => 1,
                    'fecha_inicio' => '2026-01-19',
                    'fecha_fin' => '2026-03-27',
                    'created_at' => now(),
                ],
                [
                    'numero' => 2,
                    'fecha_inicio' => '2026-04-06',
                    'fecha_fin' => '2026-06-12',
                    'created_at' => now(),
                ],
                [
                    'numero' => 3,
                    'fecha_inicio' => '2026-07-06',
                    'fecha_fin' => '2026-09-11',
                    'created_at' => now(),
                ],
                [
                    'numero' => 4,
                    'fecha_inicio' => '2026-09-14',
                    'fecha_fin' => '2026-11-27',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
