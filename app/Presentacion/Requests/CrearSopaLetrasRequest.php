<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearSopaLetrasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tema_id' => 'nullable|integer|exists:temas,id',
            'grado_id' => 'nullable|integer|exists:grados,id',
            'materia_id' => 'nullable|integer|exists:materias,id',
            'periodo_id' => 'nullable|integer|exists:periodos,id',
            'tiempo_limite' => 'required|integer|min:30', // En segundos, min 30 seg
            'puntaje_total' => 'required|integer|min:1',
            'estado' => 'required|in:BORRADOR,PUBLICADO',
            
            'palabras' => 'required|array|min:1|max:20',
            'palabras.*' => 'required|string|min:2|max:15|alpha'
        ];
    }
}
