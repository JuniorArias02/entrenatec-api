<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SincronizarBloquesTemaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'bloques' => 'required|array',
            'bloques.*.tipo' => 'required|string|in:TITULO,SUBTITULO,TEXTO,IMAGEN,GALERIA,VIDEO,PDF,LINK,TABLA,LISTA,CODIGO,CUADRO_TEORICO,ACTIVIDAD,SEPARADOR',
            'bloques.*.contenido' => 'nullable|string',
            'bloques.*.metadata' => 'nullable|array',
            'bloques.*.orden' => 'required|integer',
            'bloques.*.visible' => 'required|boolean',
        ];
    }
}
