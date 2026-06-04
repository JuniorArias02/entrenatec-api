<?php

namespace App\Infraestructura\Periodo\Repositorios;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;
use App\Dominio\Periodo\DTOs\CrearPeriodoDTO;
use App\Dominio\Periodo\DTOs\ActualizarPeriodoDTO;
use App\Models\Periodo;
use Illuminate\Database\Eloquent\Collection;

class EloquentPeriodoRepositorio implements PeriodoRepositorio
{
    public function obtenerTodos(): Collection
    {
        return Periodo::all();
    }

    public function obtenerPorId(int $id): ?Periodo
    {
        return Periodo::find($id);
    }

    public function crear(CrearPeriodoDTO $dto): Periodo
    {
        return Periodo::create([
            'numero' => $dto->numero,
            'fecha_inicio' => $dto->fecha_inicio,
            'fecha_fin' => $dto->fecha_fin,
        ]);
    }

    public function actualizar(int $id, ActualizarPeriodoDTO $dto): Periodo
    {
        $periodo = Periodo::findOrFail($id);
        
        $datos = [];
        if ($dto->numero !== null) {
            $datos['numero'] = $dto->numero;
        }
        if ($dto->fecha_inicio !== null) {
            $datos['fecha_inicio'] = $dto->fecha_inicio;
        }
        if ($dto->fecha_fin !== null) {
            $datos['fecha_fin'] = $dto->fecha_fin;
        }

        $periodo->update($datos);
        return $periodo;
    }

    public function eliminar(int $id): bool
    {
        $periodo = Periodo::findOrFail($id);
        return $periodo->delete();
    }
}
