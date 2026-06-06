<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluarQuizRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'respuestas' => 'required|array|min:1',
            'respuestas.*.pregunta_id' => 'required|integer|exists:quiz_preguntas,id',
            'respuestas.*.respuesta_id' => 'required|integer|exists:quiz_respuestas,id',
        ];
    }
}
