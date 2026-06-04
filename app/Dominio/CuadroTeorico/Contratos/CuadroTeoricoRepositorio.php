<?php

namespace App\Dominio\CuadroTeorico\Contratos;

use App\Dominio\CuadroTeorico\DTOs\CrearCuadroTeoricoDTO;
use App\Dominio\CuadroTeorico\DTOs\ActualizarCuadroTeoricoDTO;
use App\Models\CuadroTeorico;
use Illuminate\Database\Eloquent\Collection;

interface CuadroTeoricoRepositorio
{
    public function obtenerTodos(): Collection;

    public function obtenerPorId(int $id): ?CuadroTeorico;

    public function crear(CrearCuadroTeoricoDTO $dto): CuadroTeorico;

    public function actualizar(int $id, ActualizarCuadroTeoricoDTO $dto): CuadroTeorico;

    public function eliminar(int $id): bool;
}
