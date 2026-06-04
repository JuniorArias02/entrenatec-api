<?php

namespace App\Aplicacion\CuadroTeorico\Acciones;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;
use App\Models\CuadroTeorico;

class ObtenerCuadroTeoricoPorIdAccion
{
    public function __construct(
        private readonly CuadroTeoricoRepositorio $cuadroTeoricoRepositorio
    ) {}

    public function ejecutar(int $id): ?CuadroTeorico
    {
        return $this->cuadroTeoricoRepositorio->obtenerPorId($id);
    }
}
