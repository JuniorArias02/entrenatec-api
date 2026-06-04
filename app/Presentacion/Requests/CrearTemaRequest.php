<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearTemaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Asumimos que el middleware auth ya valida permisos
    }

    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:temas,slug',
            'descripcion' => 'nullable|string',
            'grado_id' => 'required|integer|exists:grados,id',
            'materia_id' => 'required|integer|exists:materias,id',
            'periodo_id' => 'required|integer|exists:periodos,id',
            'portada' => 'nullable|image|max:5120', // Hasta 5MB
            'orden' => 'nullable|integer',
            'estado' => 'required|string|in:BORRADOR,PUBLICADO,OCULTO',
        ];
    }
}
