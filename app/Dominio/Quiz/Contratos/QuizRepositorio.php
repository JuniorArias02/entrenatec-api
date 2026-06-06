<?php

namespace App\Dominio\Quiz\Contratos;

use App\Models\Quiz;

interface QuizRepositorio
{
    public function crear(array $datosQuiz, array $preguntas): Quiz;
    public function obtenerPorId(int $id): ?Quiz;
    public function obtenerTodos(array $filtros): \Illuminate\Database\Eloquent\Collection;
    
    // Métodos para preguntas
    public function agregarPregunta(int $quizId, array $datosPregunta, array $respuestas): \App\Models\QuizPregunta;
    public function actualizarPregunta(int $preguntaId, array $datosPregunta, array $respuestas): \App\Models\QuizPregunta;
    public function eliminarPregunta(int $preguntaId): bool;
    
    // Método para intentos/evaluación
    public function registrarIntento(int $quizId, int $usuarioId, array $respuestasEnviadas): \App\Models\QuizIntento;
}
