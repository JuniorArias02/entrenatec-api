<?php

namespace App\Aplicacion\CuadroTeorico\Acciones;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;
use App\Dominio\CuadroTeorico\DTOs\CrearCuadroTeoricoDTO;
use App\Models\CuadroTeorico;

class CrearCuadroTeoricoAccion
{
    public function __construct(
        private readonly CuadroTeoricoRepositorio $cuadroTeoricoRepositorio
    ) {}

    public function ejecutar(CrearCuadroTeoricoDTO $dto): CuadroTeorico
    {
        return $this->cuadroTeoricoRepositorio->crear($dto);
    }
}
