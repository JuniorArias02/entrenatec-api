<?php

namespace Database\Seeders;

use App\Models\Grado;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Tema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TecnologiaOnceP1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = base_path('database/semillas_locales/tecnologia_once_p1.json');
        
        if (!file_exists($jsonPath)) {
            $this->command->warn("El archivo {$jsonPath} no existe. Seeder abortado.");
            return;
        }

        $data = json_decode(file_get_contents($jsonPath), true);

        // Obtener dependencias
        $grado = Grado::where('nombre', 'Once')->first();
        $materia = Materia::where('nombre', 'Informática')->first();
        $periodo = Periodo::where('numero', 1)->first();

        if (!$grado || !$materia || !$periodo) {
            $this->command->error("No se encontraron los registros de Grado (Once), Materia (Informática) o Periodo 1.");
            return;
        }

        $this->command->info("Insertando {$data['titulo_general']} (Grado Once - P1)...");

        $ordenTema = 1;

        foreach ($data['temas'] as $temaItem) {
            $portada = $temaItem['portada'] ?? 'portadas/default.jpg';

            $tema = Tema::updateOrCreate(
                [
                    'slug' => Str::slug($temaItem['titulo']),
                    'grado_id' => $grado->id,
                    'materia_id' => $materia->id,
                    'periodo_id' => $periodo->id,
                ],
                [
                    'titulo' => $temaItem['titulo'],
                    'descripcion' => $temaItem['descripcion'],
                    'orden' => $ordenTema++,
                    'estado' => 'PUBLICADO',
                    'creado_por' => 1,
                    'portada' => $portada
                ]
            );

            // Limpiar bloques anteriores
            $tema->bloques()->delete();

            $ordenBloque = 1;

            if (!empty($temaItem['bloques'])) {
                foreach ($temaItem['bloques'] as $bloque) {
                    $tema->bloques()->create([
                        'tipo' => $bloque['tipo'],
                        'contenido' => $bloque['contenido'],
                        'metadata' => $bloque['metadata'] ?? [],
                        'orden' => $ordenBloque++,
                        'visible' => true
                    ]);
                }
            }
        }

        $this->command->info('✅ Temas de Tecnología Once P1 importados exitosamente.');
    }
}
