<?php

namespace App\Infraestructura\SopaLetras\Repositorios;

use App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio;
use App\Models\SopaLetras;
use App\Models\SopaLetrasPalabra;
use App\Models\SopaLetrasIntento;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class EloquentSopaLetrasRepositorio implements SopaLetrasRepositorio
{
    public function crear(array $datosSopa, array $palabras): SopaLetras
    {
        return DB::transaction(function () use ($datosSopa, $palabras) {
            $sopa = SopaLetras::create($datosSopa);

            foreach ($palabras as $palabraStr) {
                SopaLetrasPalabra::create([
                    'sopa_letras_id' => $sopa->id,
                    'palabra' => strtoupper(trim($palabraStr))
                ]);
            }

            return $sopa->load('palabras');
        });
    }

    public function obtenerTodos(array $filtros): Collection
    {
        $query = SopaLetras::with('palabras');

        if (!empty($filtros['tema_id'])) $query->where('tema_id', $filtros['tema_id']);
        if (!empty($filtros['grado_id'])) $query->where('grado_id', $filtros['grado_id']);
        if (!empty($filtros['materia_id'])) $query->where('materia_id', $filtros['materia_id']);
        if (!empty($filtros['periodo_id'])) $query->where('periodo_id', $filtros['periodo_id']);

        return $query->get();
    }

    public function obtenerPorId(int $id): ?SopaLetras
    {
        return SopaLetras::with('palabras')->find($id);
    }

    public function registrarIntento(int $sopaId, int $usuarioId, int $palabrasEncontradas, int $tiempoUtilizado): SopaLetrasIntento
    {
        return DB::transaction(function () use ($sopaId, $usuarioId, $palabrasEncontradas, $tiempoUtilizado) {
            $sopa = SopaLetras::with('palabras')->findOrFail($sopaId);
            $totalPalabras = $sopa->palabras->count();

            // Lógica de puntaje
            $puntaje = 0;
            if ($totalPalabras > 0) {
                $valorPorPalabra = $sopa->puntaje_total / $totalPalabras;
                $puntaje = min(floor($palabrasEncontradas * $valorPorPalabra), $sopa->puntaje_total);
            }

            // Opcional: bonificación por tiempo, pero lo dejaremos simple como pidió el usuario

            return SopaLetrasIntento::create([
                'sopa_letras_id' => $sopaId,
                'usuario_id' => $usuarioId,
                'palabras_encontradas' => $palabrasEncontradas,
                'puntaje_obtenido' => $puntaje,
                'completado' => ($palabrasEncontradas >= $totalPalabras)
            ]);
        });
    }
}
