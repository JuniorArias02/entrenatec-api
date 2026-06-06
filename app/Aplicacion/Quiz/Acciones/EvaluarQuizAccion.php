<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\QuizIntento;

class EvaluarQuizAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(int $quizId, int $usuarioId, array $respuestasEnviadas): QuizIntento
    {
        return $this->repositorio->registrarIntento($quizId, $usuarioId, $respuestasEnviadas);
    }
}
