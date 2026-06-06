<?php

namespace App\Aplicacion\SopaLetras\Acciones;

use App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio;
use Illuminate\Database\Eloquent\Collection;

class ObtenerSopasLetrasAccion
{
    public function __construct(
        private readonly SopaLetrasRepositorio $repositorio
    ) {}

    public function ejecutar(array $filtros): Collection
    {
        return $this->repositorio->obtenerTodos($filtros);
    }
}
