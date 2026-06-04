<?php

namespace App\Aplicacion\Grado\Acciones;

use App\Dominio\Grado\Contratos\GradoRepositorio;
use App\Models\Grado;

class ObtenerGradoPorIdAccion
{
    public function __construct(
        private readonly GradoRepositorio $gradoRepositorio
    ) {}

    public function ejecutar(int $id): ?Grado
    {
        return $this->gradoRepositorio->obtenerPorId($id);
    }
}
