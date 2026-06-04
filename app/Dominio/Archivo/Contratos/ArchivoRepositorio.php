<?php

namespace App\Dominio\Archivo\Contratos;

use App\Models\Archivo;

interface ArchivoRepositorio
{
    public function crear(array $datos): Archivo;
}
