<?php

namespace App\Aplicacion\Periodo\Acciones;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;
use App\Models\Periodo;

class ObtenerPeriodoPorIdAccion
{
    public function __construct(
        private readonly PeriodoRepositorio $periodoRepositorio
    ) {}

    public function ejecutar(int $id): ?Periodo
    {
        return $this->periodoRepositorio->obtenerPorId($id);
    }
}
