<?php

namespace App\Aplicacion\Tema\Acciones;

use App\Models\Tema;
use Illuminate\Support\Facades\DB;

class SincronizarBloquesTemaAccion
{
    public function ejecutar(int $temaId, array $bloques): void
    {
        $tema = Tema::findOrFail($temaId);

        DB::transaction(function () use ($tema, $bloques) {
            // 1. Opcional: Eliminar los bloques anteriores si estamos reemplazando todo
            // Esto asume que el frontend envía SIEMPRE todos los bloques. 
            // Si el CMS funciona como un "Guardar Cambios" global del constructor visual, esto es lo más fácil.
            DB::table('bloques_contenido')->where('tema_id', $tema->id)->delete();

            // 2. Insertar los nuevos bloques
            $bloquesInsertar = [];
            foreach ($bloques as $bloque) {
                $bloquesInsertar[] = [
                    'tema_id' => $tema->id,
                    'tipo' => $bloque['tipo'],
                    'contenido' => $bloque['contenido'] ?? '',
                    'metadata' => isset($bloque['metadata']) ? json_encode($bloque['metadata']) : null,
                    'orden' => $bloque['orden'],
                    'visible' => $bloque['visible'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            if (count($bloquesInsertar) > 0) {
                DB::table('bloques_contenido')->insert($bloquesInsertar);
            }
        });
    }
}
