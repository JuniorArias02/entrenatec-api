<?php

namespace App\Aplicacion\Periodo\Acciones;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;
use App\Dominio\Periodo\DTOs\CrearPeriodoDTO;
use App\Models\Periodo;

class CrearPeriodoAccion
{
    public function __construct(
        private readonly PeriodoRepositorio $periodoRepositorio
    ) {}

    public function ejecutar(CrearPeriodoDTO $dto): Periodo
    {
        return $this->periodoRepositorio->crear($dto);
    }
}
