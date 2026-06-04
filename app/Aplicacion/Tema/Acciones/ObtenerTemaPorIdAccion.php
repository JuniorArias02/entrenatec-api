<?php

namespace App\Aplicacion\Tema\Acciones;

use App\Models\Tema;
use App\Models\Archivo;

class ObtenerTemaPorIdAccion
{
    public function ejecutar(int $id): ?Tema
    {
        // Traemos el tema junto con sus bloques ordenados
        $tema = Tema::with(['bloques' => function ($query) {
            $query->where('visible', true)->orderBy('orden', 'asc');
        }])->find($id);

        if (!$tema) {
            return null;
        }

        if ($tema->portada && !str_starts_with($tema->portada, 'http')) {
            $tema->portada = asset('storage/' . ltrim($tema->portada, '/storage/')); // just in case
        }

        $archivoIds = collect($tema->bloques)->map(function ($bloque) {
            return $bloque->metadata['archivo_id'] ?? null;
        })->filter()->unique()->toArray();

        if (!empty($archivoIds)) {
            $archivos = Archivo::whereIn('id', $archivoIds)->get()->keyBy('id');
            
            $tema->bloques->transform(function ($bloque) use ($archivos) {
                if (isset($bloque->metadata['archivo_id'])) {
                    $archivoId = $bloque->metadata['archivo_id'];
                    if (isset($archivos[$archivoId])) {
                        $metadata = $bloque->metadata;
                        $rutaArchivo = $archivos[$archivoId]->archivo;
                        $metadata['url'] = str_starts_with($rutaArchivo, 'http') ? $rutaArchivo : asset($rutaArchivo);
                        $bloque->metadata = $metadata;
                    }
                }
                return $bloque;
            });
        }

        return $tema;
    }
}
