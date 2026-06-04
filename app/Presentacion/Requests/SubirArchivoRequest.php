<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubirArchivoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'archivo' => 'required|file|max:51200' // Max 50MB
        ];
    }
}
