<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\Quiz;

class CrearQuizAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(array $datosQuiz, array $preguntas): Quiz
    {
        return $this->repositorio->crear($datosQuiz, $preguntas);
    }
}
