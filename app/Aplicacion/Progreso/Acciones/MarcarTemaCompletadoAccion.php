<?php

namespace App\Aplicacion\Progreso\Acciones;

use App\Models\ProgresoTema;

class MarcarTemaCompletadoAccion
{
    public function ejecutar(string $estudianteUuid, int $temaId): void
    {
        ProgresoTema::firstOrCreate([
            'estudiante_uuid' => $estudianteUuid,
            'tema_id' => $temaId
        ]);
    }
}
