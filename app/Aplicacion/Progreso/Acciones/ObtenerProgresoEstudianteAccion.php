<?php

namespace App\Aplicacion\Progreso\Acciones;

use App\Models\ProgresoTema;

class ObtenerProgresoEstudianteAccion
{
    public function ejecutar(string $estudianteUuid): array
    {
        return ProgresoTema::where('estudiante_uuid', $estudianteUuid)
            ->pluck('tema_id')
            ->toArray();
    }
}
