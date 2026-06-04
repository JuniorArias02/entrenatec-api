<?php

namespace App\Infraestructura\CuadroTeorico\Repositorios;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;
use App\Dominio\CuadroTeorico\DTOs\CrearCuadroTeoricoDTO;
use App\Dominio\CuadroTeorico\DTOs\ActualizarCuadroTeoricoDTO;
use App\Models\CuadroTeorico;
use Illuminate\Database\Eloquent\Collection;

class EloquentCuadroTeoricoRepositorio implements CuadroTeoricoRepositorio
{
    public function obtenerTodos(): Collection
    {
        return CuadroTeorico::with(['grado', 'materia', 'periodo'])->get();
    }

    public function obtenerPorId(int $id): ?CuadroTeorico
    {
        return CuadroTeorico::with(['grado', 'materia', 'periodo'])->find($id);
    }

    public function crear(CrearCuadroTeoricoDTO $dto): CuadroTeorico
    {
        return CuadroTeorico::create([
            'grado_id' => $dto->grado_id,
            'materia_id' => $dto->materia_id,
            'periodo_id' => $dto->periodo_id,
            'contenido' => $dto->contenido,
            'estado' => $dto->estado->value,
        ]);
    }

    public function actualizar(int $id, ActualizarCuadroTeoricoDTO $dto): CuadroTeorico
    {
        $cuadroTeorico = CuadroTeorico::findOrFail($id);
        
        $datos = [];
        if ($dto->grado_id !== null) {
            $datos['grado_id'] = $dto->grado_id;
        }
        if ($dto->materia_id !== null) {
            $datos['materia_id'] = $dto->materia_id;
        }
        if ($dto->periodo_id !== null) {
            $datos['periodo_id'] = $dto->periodo_id;
        }
        if ($dto->contenido !== null) {
            $datos['contenido'] = $dto->contenido;
        }
        if ($dto->estado !== null) {
            $datos['estado'] = $dto->estado->value;
        }

        $cuadroTeorico->update($datos);
        return $cuadroTeorico;
    }

    public function eliminar(int $id): bool
    {
        $cuadroTeorico = CuadroTeorico::findOrFail($id);
        return $cuadroTeorico->delete();
    }
}
