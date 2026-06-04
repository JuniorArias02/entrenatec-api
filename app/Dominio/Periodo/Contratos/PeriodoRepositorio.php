<?php

namespace App\Dominio\Periodo\Contratos;

use App\Dominio\Periodo\DTOs\CrearPeriodoDTO;
use App\Dominio\Periodo\DTOs\ActualizarPeriodoDTO;
use App\Models\Periodo;
use Illuminate\Database\Eloquent\Collection;

interface PeriodoRepositorio
{
    public function obtenerTodos(): Collection;

    public function obtenerPorId(int $id): ?Periodo;

    public function crear(CrearPeriodoDTO $dto): Periodo;

    public function actualizar(int $id, ActualizarPeriodoDTO $dto): Periodo;

    public function eliminar(int $id): bool;
}
