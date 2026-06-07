<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubirGaleriaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Asume que la autorización se maneja por JWT en el middleware
    }

    public function rules()
    {
        return [
            'imagenes' => 'required|array|min:1',
            'imagenes.*' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:10240', // max 10MB por imagen
        ];
    }

    public function messages()
    {
        return [
            'imagenes.required' => 'Debe proporcionar al menos una imagen.',
            'imagenes.array' => 'El formato de las imágenes es inválido.',
            'imagenes.*.mimes' => 'Solo se permiten imágenes en formato jpeg, png, jpg, gif, svg o webp.',
            'imagenes.*.max' => 'Cada imagen no debe exceder los 10MB.',
        ];
    }
}
