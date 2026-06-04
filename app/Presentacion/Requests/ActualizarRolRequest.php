<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarRolRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rol' => 'required|string|in:ADMIN,DOCENTE,EDITOR,ESTUDIANTE',
        ];
    }
}
