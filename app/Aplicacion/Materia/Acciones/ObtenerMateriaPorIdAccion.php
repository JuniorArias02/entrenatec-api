<?php

namespace App\Aplicacion\Materia\Acciones;

use App\Dominio\Materia\Contratos\MateriaRepositorio;
use App\Models\Materia;

class ObtenerMateriaPorIdAccion
{
    public function __construct(
        private readonly MateriaRepositorio $materiaRepositorio
    ) {}

    public function ejecutar(int $id): ?Materia
    {
        return $this->materiaRepositorio->obtenerPorId($id);
    }
}
