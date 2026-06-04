<?php

namespace App\Infraestructura\Quiz\Repositorios;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\Quiz;
use App\Models\QuizPregunta;
use App\Models\QuizRespuesta;
use Illuminate\Support\Facades\DB;

class EloquentQuizRepositorio implements QuizRepositorio
{
    public function crear(array $datosQuiz, array $preguntas): Quiz
    {
        return DB::transaction(function () use ($datosQuiz, $preguntas) {
            $quiz = Quiz::create($datosQuiz);

            foreach ($preguntas as $preguntaIndex => $preg) {
                $quizPregunta = QuizPregunta::create([
                    'quiz_id' => $quiz->id,
                    'pregunta' => $preg['pregunta'],
                    'tipo' => $preg['tipo'],
                    'puntaje' => $preg['puntaje'],
                    'orden' => $preg['orden'] ?? ($preguntaIndex + 1),
                    'created_at' => now(),
                ]);

                if (isset($preg['respuestas'])) {
                    foreach ($preg['respuestas'] as $resp) {
                        QuizRespuesta::create([
                            'pregunta_id' => $quizPregunta->id,
                            'respuesta' => $resp['respuesta'],
                            'es_correcta' => $resp['es_correcta'],
                            'created_at' => now(),
                        ]);
                    }
                }
            }

            return $quiz->load('preguntas.respuestas');
        });
    }

    public function obtenerPorId(int $id): ?Quiz
    {
        return Quiz::with('preguntas.respuestas')->find($id);
    }

    public function obtenerTodos(array $filtros): \Illuminate\Database\Eloquent\Collection
    {
        $query = Quiz::with('preguntas.respuestas');

        if (!empty($filtros['tema_id'])) {
            $query->where('tema_id', $filtros['tema_id']);
        }
        if (!empty($filtros['grado_id'])) {
            $query->where('grado_id', $filtros['grado_id']);
        }
        if (!empty($filtros['materia_id'])) {
            $query->where('materia_id', $filtros['materia_id']);
        }
        if (!empty($filtros['periodo_id'])) {
            $query->where('periodo_id', $filtros['periodo_id']);
        }

        return $query->get();
    }
}
