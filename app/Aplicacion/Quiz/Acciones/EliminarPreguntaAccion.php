<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;

class EliminarPreguntaAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(int $preguntaId): bool
    {
        return $this->repositorio->eliminarPregunta($preguntaId);
    }
}
