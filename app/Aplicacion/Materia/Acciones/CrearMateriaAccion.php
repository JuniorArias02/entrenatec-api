<?php

namespace App\Aplicacion\Materia\Acciones;

use App\Dominio\Materia\Contratos\MateriaRepositorio;
use App\Dominio\Materia\DTOs\CrearMateriaDTO;
use App\Models\Materia;

class CrearMateriaAccion
{
    public function __construct(
        private readonly MateriaRepositorio $materiaRepositorio
    ) {}

    public function ejecutar(CrearMateriaDTO $dto): Materia
    {
        return $this->materiaRepositorio->crear($dto);
    }
}
