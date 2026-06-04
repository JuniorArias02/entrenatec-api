<?php

namespace App\Dominio\Quiz\Contratos;

use App\Models\Quiz;

interface QuizRepositorio
{
    public function crear(array $datosQuiz, array $preguntas): Quiz;
    public function obtenerPorId(int $id): ?Quiz;
    public function obtenerTodos(array $filtros): \Illuminate\Database\Eloquent\Collection;
}
