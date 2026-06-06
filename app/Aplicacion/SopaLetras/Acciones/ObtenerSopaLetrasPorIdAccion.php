<?php

namespace App\Aplicacion\SopaLetras\Acciones;

use App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio;
use App\Models\SopaLetras;

class ObtenerSopaLetrasPorIdAccion
{
    public function __construct(
        private readonly SopaLetrasRepositorio $repositorio
    ) {}

    public function ejecutar(int $id): ?SopaLetras
    {
        return $this->repositorio->obtenerPorId($id);
    }
}
