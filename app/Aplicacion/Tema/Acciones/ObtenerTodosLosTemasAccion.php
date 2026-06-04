<?php

namespace App\Aplicacion\Tema\Acciones;

use App\Models\Tema;
use Illuminate\Http\Request;

class ObtenerTodosLosTemasAccion
{
    public function ejecutar(Request $request)
    {
        $query = Tema::withCount('bloques');

        // Filtros opcionales para el panel
        if ($request->has('grado_id')) {
            $query->where('grado_id', $request->query('grado_id'));
        }

        if ($request->has('periodo_id')) {
            $query->where('periodo_id', $request->query('periodo_id'));
        }

        if ($request->has('materia_id')) {
            $query->where('materia_id', $request->query('materia_id'));
        }

        $temas = $query->orderBy('orden', 'asc')->get();

        return $temas->map(function ($tema) {
            if ($tema->portada && !str_starts_with($tema->portada, 'http')) {
                $tema->portada = asset('storage/' . $tema->portada);
            }
            // Agregamos una propiedad útil para el frontend del panel
            $tema->tiene_contenido = $tema->bloques_count > 0;
            return $tema;
        });
    }
}
