<?php

namespace App\Aplicacion\Progreso\Acciones;

use App\Models\ProgresoTema;
use App\Models\Tema;

class ObtenerDashboardEstudianteAccion
{
    public function ejecutar(string $estudianteUuid): array
    {
        $temasCompletados = ProgresoTema::where('estudiante_uuid', $estudianteUuid)->count();
        $temasTotales = Tema::where('estado', 'PUBLICADO')->count();
        
        $progresoGeneral = $temasTotales > 0 
            ? round(($temasCompletados / $temasTotales) * 100) 
            : 0;

        // Fórmulas ficticias (RPG y tiempo estimado) para enriquecer el dashboard
        $nivel = floor($temasCompletados / 3) + 1;
        $horasEstudio = $temasCompletados * 2; // Asumiendo 2 horas por tema

        return [
            'progreso_general' => $progresoGeneral,
            'temas_completados' => $temasCompletados,
            'temas_totales' => $temasTotales,
            'nivel' => $nivel,
            'horas_estudio' => $horasEstudio
        ];
    }
}
