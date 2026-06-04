<?php

namespace App\Aplicacion\Contenido\Acciones;

use App\Models\Tema;
use App\Models\CuadroTeorico;

class ObtenerContenidoPeriodoAccion
{
    public function ejecutar(int $gradoId, int $periodoId)
    {
        // Traemos el cuadro teórico correspondiente al grado y periodo
        $cuadroTeorico = CuadroTeorico::where('grado_id', $gradoId)
            ->where('periodo_id', $periodoId)
            ->first();

        // Traemos solo la información esencial de los temas para la vista de lista
        $temas = Tema::select('id', 'titulo', 'slug', 'descripcion', 'portada', 'orden', 'estado')
            ->where('grado_id', $gradoId)
            ->where('periodo_id', $periodoId)
            ->where('estado', 'PUBLICADO') // Solo temas publicados
            ->orderBy('orden', 'asc')
            ->get()
            ->map(function ($tema) {
                if ($tema->portada && !str_starts_with($tema->portada, 'http')) {
                    $tema->portada = asset('storage/' . $tema->portada);
                }
                return $tema;
            });

        return [
            'cuadro_teorico' => $cuadroTeorico,
            'temas' => $temas
        ];
    }
}
