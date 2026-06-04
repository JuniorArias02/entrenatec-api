<?php

namespace App\Aplicacion\Grado\Acciones;

use App\Dominio\Grado\Contratos\GradoRepositorio;

class EliminarGradoAccion
{
    public function __construct(
        private readonly GradoRepositorio $gradoRepositorio
    ) {}

    public function ejecutar(int $id): bool
    {
        return $this->gradoRepositorio->eliminar($id);
    }
}
