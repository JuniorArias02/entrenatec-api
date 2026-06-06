<?php

namespace App\Aplicacion\Quiz\Acciones;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\QuizPregunta;

class ActualizarPreguntaAccion
{
    public function __construct(
        private readonly QuizRepositorio $repositorio
    ) {}

    public function ejecutar(int $preguntaId, array $datosPregunta, array $respuestas): QuizPregunta
    {
        return $this->repositorio->actualizarPregunta($preguntaId, $datosPregunta, $respuestas);
    }
}
