<?php

namespace App\Aplicacion\Grado\Acciones;

use App\Dominio\Grado\Contratos\GradoRepositorio;
use App\Dominio\Grado\DTOs\ActualizarGradoDTO;
use App\Models\Grado;

class ActualizarGradoAccion
{
    public function __construct(
        private readonly GradoRepositorio $gradoRepositorio
    ) {}

    public function ejecutar(int $id, ActualizarGradoDTO $dto): Grado
    {
        return $this->gradoRepositorio->actualizar($id, $dto);
    }
}
