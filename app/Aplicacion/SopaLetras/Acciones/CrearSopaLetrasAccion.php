<?php

namespace App\Aplicacion\SopaLetras\Acciones;

use App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio;
use App\Models\SopaLetras;

class CrearSopaLetrasAccion
{
    public function __construct(
        private readonly SopaLetrasRepositorio $repositorio
    ) {}

    public function ejecutar(array $datosSopa, array $palabras): SopaLetras
    {
        return $this->repositorio->crear($datosSopa, $palabras);
    }
}
