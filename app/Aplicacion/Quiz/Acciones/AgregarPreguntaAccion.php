<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\QuizPregunta;

class AgregarPreguntaAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(int $quizId, array $datosPregunta, array $respuestas): QuizPregunta
    {
        return $this->repositorio->agregarPregunta($quizId, $datosPregunta, $respuestas);
    }
}
