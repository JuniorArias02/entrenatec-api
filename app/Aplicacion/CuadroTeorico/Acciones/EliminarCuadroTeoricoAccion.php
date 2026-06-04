<?php

namespace App\Aplicacion\CuadroTeorico\Acciones;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;

class EliminarCuadroTeoricoAccion
{
    public function __construct(
        private readonly CuadroTeoricoRepositorio $cuadroTeoricoRepositorio
    ) {}

    public function ejecutar(int $id): bool
    {
        return $this->cuadroTeoricoRepositorio->eliminar($id);
    }
}
