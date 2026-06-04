<?php

namespace App\Aplicacion\Dashboard\Acciones;

use App\Dominio\Dashboard\Contratos\DashboardRepositorio;

class ObtenerEstadisticasDashboardAccion
{
    public function __construct(
        private readonly DashboardRepositorio $repositorio
    ) {}

    public function ejecutar(string $rol): array
    {
        return $this->repositorio->obtenerEstadisticas($rol);
    }
}
