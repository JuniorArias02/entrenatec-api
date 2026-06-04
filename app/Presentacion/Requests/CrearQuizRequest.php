<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearQuizRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tema_id' => 'nullable|integer|exists:temas,id',
            'grado_id' => 'nullable|integer|exists:grados,id',
            'materia_id' => 'nullable|integer|exists:materias,id',
            'periodo_id' => 'nullable|integer|exists:periodos,id',
            'tiempo_limite' => 'required|integer|min:0',
            'puntaje_aprobacion' => 'required|integer|min:0',
            'intentos_maximos' => 'required|integer|min:1',
            'estado' => 'required|in:BORRADOR,PUBLICADO',
            
            'preguntas' => 'required|array|min:1',
            'preguntas.*.pregunta' => 'required|string',
            'preguntas.*.tipo' => 'required|in:OPCION_MULTIPLE,VERDADERO_FALSO,SELECCION_UNICA,SELECCION_MULTIPLE',
            'preguntas.*.puntaje' => 'required|integer|min:1',
            'preguntas.*.orden' => 'nullable|integer',

            'preguntas.*.respuestas' => 'required|array|min:2',
            'preguntas.*.respuestas.*.respuesta' => 'required|string',
            'preguntas.*.respuestas.*.es_correcta' => 'required|boolean',
        ];
    }
}
