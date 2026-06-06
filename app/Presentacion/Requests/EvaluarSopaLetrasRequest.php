<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluarSopaLetrasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'palabras_encontradas' => 'required|integer|min:0',
            'tiempo_utilizado' => 'required|integer|min:0'
        ];
    }
}
