<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\Quiz;

class ObtenerQuizPorIdAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(int $id): ?Quiz
    {
        return $this->repositorio->obtenerPorId($id);
    }
}
