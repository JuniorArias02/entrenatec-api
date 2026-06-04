<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearGradoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:10'],
        ];
    }
}
