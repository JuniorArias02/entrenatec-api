<?php

namespace App\Infraestructura\Materia\Repositorios;

use App\Dominio\Materia\Contratos\MateriaRepositorio;
use App\Dominio\Materia\DTOs\CrearMateriaDTO;
use App\Dominio\Materia\DTOs\ActualizarMateriaDTO;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Collection;

class EloquentMateriaRepositorio implements MateriaRepositorio
{
    public function obtenerTodos(): Collection
    {
        return Materia::all();
    }

    public function obtenerPorId(int $id): ?Materia
    {
        return Materia::find($id);
    }

    public function crear(CrearMateriaDTO $dto): Materia
    {
        return Materia::create([
            'nombre' => $dto->nombre,
            'descripcion' => $dto->descripcion,
            'estado' => $dto->estado->value,
        ]);
    }

    public function actualizar(int $id, ActualizarMateriaDTO $dto): Materia
    {
        $materia = Materia::findOrFail($id);
        
        $datos = [];
        if ($dto->nombre !== null) {
            $datos['nombre'] = $dto->nombre;
        }
        if ($dto->descripcion !== null) {
            $datos['descripcion'] = $dto->descripcion;
        }
        if ($dto->estado !== null) {
            $datos['estado'] = $dto->estado->value;
        }

        $materia->update($datos);
        return $materia;
    }

    public function eliminar(int $id): bool
    {
        $materia = Materia::findOrFail($id);
        return $materia->delete();
    }
}
