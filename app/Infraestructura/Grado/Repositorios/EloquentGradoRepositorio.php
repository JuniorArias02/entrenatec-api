<?php

namespace App\Infraestructura\Grado\Repositorios;

use App\Dominio\Grado\Contratos\GradoRepositorio;
use App\Dominio\Grado\DTOs\CrearGradoDTO;
use App\Dominio\Grado\DTOs\ActualizarGradoDTO;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Collection;

class EloquentGradoRepositorio implements GradoRepositorio
{
    public function obtenerTodos(): Collection
    {
        return Grado::all();
    }

    public function obtenerPorId(int $id): ?Grado
    {
        return Grado::find($id);
    }

    public function crear(CrearGradoDTO $dto): Grado
    {
        return Grado::create([
            'nombre' => $dto->nombre,
        ]);
    }

    public function actualizar(int $id, ActualizarGradoDTO $dto): Grado
    {
        $grado = Grado::findOrFail($id);
        $grado->update([
            'nombre' => $dto->nombre,
        ]);
        return $grado;
    }

    public function eliminar(int $id): bool
    {
        $grado = Grado::findOrFail($id);
        return $grado->delete();
    }
}
