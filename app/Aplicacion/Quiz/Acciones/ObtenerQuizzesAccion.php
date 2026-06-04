<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;

class ObtenerQuizzesAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(array $filtros)
    {
        return $this->repositorio->obtenerTodos($filtros);
    }
}
