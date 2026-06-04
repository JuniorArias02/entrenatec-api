<?php

namespace App\Aplicacion\Materia\Acciones;

use App\Dominio\Materia\Contratos\MateriaRepositorio;
use App\Dominio\Materia\DTOs\ActualizarMateriaDTO;
use App\Models\Materia;

class ActualizarMateriaAccion
{
    public function __construct(
        private readonly MateriaRepositorio $materiaRepositorio
    ) {}

    public function ejecutar(int $id, ActualizarMateriaDTO $dto): Materia
    {
        return $this->materiaRepositorio->actualizar($id, $dto);
    }
}
