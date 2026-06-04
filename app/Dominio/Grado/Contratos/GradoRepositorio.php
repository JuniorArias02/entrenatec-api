<?php

namespace App\Dominio\Grado\Contratos;

use App\Dominio\Grado\DTOs\CrearGradoDTO;
use App\Dominio\Grado\DTOs\ActualizarGradoDTO;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Collection;

interface GradoRepositorio
{
    public function obtenerTodos(): Collection;

    public function obtenerPorId(int $id): ?Grado;

    public function crear(CrearGradoDTO $dto): Grado;

    public function actualizar(int $id, ActualizarGradoDTO $dto): Grado;

    public function eliminar(int $id): bool;
}
