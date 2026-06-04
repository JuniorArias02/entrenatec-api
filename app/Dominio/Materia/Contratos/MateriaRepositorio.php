<?php

namespace App\Dominio\Materia\Contratos;

use App\Dominio\Materia\DTOs\CrearMateriaDTO;
use App\Dominio\Materia\DTOs\ActualizarMateriaDTO;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Collection;

interface MateriaRepositorio
{
    public function obtenerTodos(): Collection;

    public function obtenerPorId(int $id): ?Materia;

    public function crear(CrearMateriaDTO $dto): Materia;

    public function actualizar(int $id, ActualizarMateriaDTO $dto): Materia;

    public function eliminar(int $id): bool;
}
