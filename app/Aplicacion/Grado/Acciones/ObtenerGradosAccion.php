<?php

namespace App\Aplicacion\Grado\Acciones;

use App\Dominio\Grado\Contratos\GradoRepositorio;
use Illuminate\Database\Eloquent\Collection;

class ObtenerGradosAccion
{
    public function __construct(
        private readonly GradoRepositorio $gradoRepositorio
    ) {}

    public function ejecutar(): Collection
    {
        return $this->gradoRepositorio->obtenerTodos();
    }
}
