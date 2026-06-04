<?php

namespace App\Aplicacion\Periodo\Acciones;

use App\Dominio\Periodo\Contratos\PeriodoRepositorio;
use Illuminate\Database\Eloquent\Collection;

class ObtenerPeriodosAccion
{
    public function __construct(
        private readonly PeriodoRepositorio $periodoRepositorio
    ) {}

    public function ejecutar(): Collection
    {
        return $this->periodoRepositorio->obtenerTodos();
    }
}
