<?php

namespace App\Infraestructura\Quiz\Repositorios;

use App\Dominio\Quiz\Contratos\QuizRepositorio;
use App\Models\Quiz;
use App\Models\QuizPregunta;
use App\Models\QuizRespuesta;
use App\Models\QuizIntento;
use App\Models\QuizIntentoRespuesta;
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

    public function agregarPregunta(int $quizId, array $datosPregunta, array $respuestas): QuizPregunta
    {
        return DB::transaction(function () use ($quizId, $datosPregunta, $respuestas) {
            $datosPregunta['quiz_id'] = $quizId;
            $datosPregunta['created_at'] = now();
            
            $pregunta = QuizPregunta::create($datosPregunta);

            foreach ($respuestas as $resp) {
                QuizRespuesta::create([
                    'pregunta_id' => $pregunta->id,
                    'respuesta' => $resp['respuesta'],
                    'es_correcta' => $resp['es_correcta'],
                    'created_at' => now(),
                ]);
            }

            return $pregunta->load('respuestas');
        });
    }

    public function actualizarPregunta(int $preguntaId, array $datosPregunta, array $respuestas): QuizPregunta
    {
        return DB::transaction(function () use ($preguntaId, $datosPregunta, $respuestas) {
            $pregunta = QuizPregunta::findOrFail($preguntaId);
            $pregunta->update($datosPregunta);

            // Eliminar respuestas anteriores
            $pregunta->respuestas()->delete();

            // Insertar nuevas respuestas
            foreach ($respuestas as $resp) {
                QuizRespuesta::create([
                    'pregunta_id' => $pregunta->id,
                    'respuesta' => $resp['respuesta'],
                    'es_correcta' => $resp['es_correcta'],
                    'created_at' => now(),
                ]);
            }

            return $pregunta->load('respuestas');
        });
    }

    public function eliminarPregunta(int $preguntaId): bool
    {
        $pregunta = QuizPregunta::findOrFail($preguntaId);
        // Las respuestas deben eliminarse en cascada si está configurado, 
        // de lo contrario las eliminamos manualmente
        $pregunta->respuestas()->delete();
        return $pregunta->delete();
    }

    public function registrarIntento(int $quizId, int $usuarioId, array $respuestasEnviadas): QuizIntento
    {
        return DB::transaction(function () use ($quizId, $usuarioId, $respuestasEnviadas) {
            $quiz = Quiz::with('preguntas.respuestas')->findOrFail($quizId);
            
            $puntajeTotalObtenido = 0;
            $intento = QuizIntento::create([
                'quiz_id' => $quizId,
                'usuario_id' => $usuarioId,
                'puntaje_obtenido' => 0,
                'aprobado' => false,
            ]);

            foreach ($respuestasEnviadas as $respEnviada) {
                $pregunta = $quiz->preguntas->where('id', $respEnviada['pregunta_id'])->first();
                if (!$pregunta) continue;

                $respuestaSeleccionada = $pregunta->respuestas->where('id', $respEnviada['respuesta_id'])->first();
                $esCorrecta = $respuestaSeleccionada ? $respuestaSeleccionada->es_correcta : false;

                if ($esCorrecta) {
                    // Simplificación: si la respuesta es correcta suma todo el puntaje de la pregunta
                    $puntajeTotalObtenido += $pregunta->puntaje;
                }

                QuizIntentoRespuesta::create([
                    'intento_id' => $intento->id,
                    'pregunta_id' => $pregunta->id,
                    'respuesta_id' => $respuestaSeleccionada ? $respuestaSeleccionada->id : null,
                    'es_correcta' => $esCorrecta,
                ]);
            }

            $intento->update([
                'puntaje_obtenido' => $puntajeTotalObtenido,
                'aprobado' => $puntajeTotalObtenido >= $quiz->puntaje_aprobacion,
            ]);

            return $intento->load('respuestas');
        });
    }
}
