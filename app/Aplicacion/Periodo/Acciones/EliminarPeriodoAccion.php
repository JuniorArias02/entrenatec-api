<?php

namespace App\Aplicacion\Periodo\Acciones;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;

class EliminarPeriodoAccion
{
    public function __construct(
        private readonly PeriodoRepositorio $periodoRepositorio
    ) {}

    public function ejecutar(int $id): bool
    {
        return $this->periodoRepositorio->eliminar($id);
    }
}
