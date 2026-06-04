<?php

namespace App\Aplicacion\Materia\Acciones;

use App\Dominio\Materia\Contratos\MateriaRepositorio;
use Illuminate\Database\Eloquent\Collection;

class ObtenerMateriasAccion
{
    public function __construct(
        private readonly MateriaRepositorio $materiaRepositorio
    ) {}

    public function ejecutar(): Collection
    {
        return $this->materiaRepositorio->obtenerTodos();
    }
}
