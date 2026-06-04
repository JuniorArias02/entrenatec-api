<?php

namespace App\Aplicacion\CuadroTeorico\Acciones;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;
use App\Dominio\CuadroTeorico\DTOs\ActualizarCuadroTeoricoDTO;
use App\Models\CuadroTeorico;

class ActualizarCuadroTeoricoAccion
{
    public function __construct(
        private readonly CuadroTeoricoRepositorio $cuadroTeoricoRepositorio
    ) {}

    public function ejecutar(int $id, ActualizarCuadroTeoricoDTO $dto): CuadroTeorico
    {
        return $this->cuadroTeoricoRepositorio->actualizar($id, $dto);
    }
}
