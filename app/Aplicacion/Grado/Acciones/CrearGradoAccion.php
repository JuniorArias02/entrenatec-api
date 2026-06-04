<?php

namespace App\Aplicacion\Grado\Acciones;

use App\Dominio\Grado\Contratos\GradoRepositorio;
use App\Dominio\Grado\DTOs\CrearGradoDTO;
use App\Models\Grado;

class CrearGradoAccion
{
    public function __construct(
        private readonly GradoRepositorio $gradoRepositorio
    ) {}

    public function ejecutar(CrearGradoDTO $dto): Grado
    {
        return $this->gradoRepositorio->crear($dto);
    }
}
