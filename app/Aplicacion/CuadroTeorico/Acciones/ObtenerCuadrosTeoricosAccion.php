<?php

namespace App\Aplicacion\CuadroTeorico\Acciones;

use App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio;
use Illuminate\Database\Eloquent\Collection;

class ObtenerCuadrosTeoricosAccion
{
    public function __construct(
        private readonly CuadroTeoricoRepositorio $cuadroTeoricoRepositorio
    ) {}

    public function ejecutar(): Collection
    {
        return $this->cuadroTeoricoRepositorio->obtenerTodos();
    }
}
