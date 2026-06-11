<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPerfilRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:150',
            'correo' => 'required|string|email|max:150|unique:usuarios,correo,' . $this->route('id'),
            'password' => 'nullable|string|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser válido.',
            'correo.unique' => 'El correo ya está en uso por otro usuario.',
        ];
    }
}
