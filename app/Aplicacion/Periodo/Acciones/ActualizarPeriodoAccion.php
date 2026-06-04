<?php

namespace App\Aplicacion\Periodo\Acciones;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;
use App\Dominio\Periodo\DTOs\ActualizarPeriodoDTO;
use App\Models\Periodo;

class ActualizarPeriodoAccion
{
    public function __construct(
        private readonly PeriodoRepositorio $periodoRepositorio
    ) {}

    public function ejecutar(int $id, ActualizarPeriodoDTO $dto): Periodo
    {
        return $this->periodoRepositorio->actualizar($id, $dto);
    }
}
