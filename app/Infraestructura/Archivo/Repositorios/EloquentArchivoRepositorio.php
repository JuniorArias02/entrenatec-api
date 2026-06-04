<?php

namespace App\Infraestructura\Archivo\Repositorios;

use App\Dominio\Archivo\Contratos\ArchivoRepositorio;
use App\Models\Archivo;

class EloquentArchivoRepositorio implements ArchivoRepositorio
{
    public function crear(array $datos): Archivo
    {
        return Archivo::create($datos);
    }
}
