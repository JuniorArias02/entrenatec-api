<?php

namespace App\Aplicacion\Materia\Acciones;

use App\Dominio\Materia\Contratos\MateriaRepositorio;

class EliminarMateriaAccion
{
    public function __construct(
        private readonly MateriaRepositorio $materiaRepositorio
    ) {}

    public function ejecutar(int $id): bool
    {
        return $this->materiaRepositorio->eliminar($id);
    }
}
