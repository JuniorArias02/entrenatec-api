<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SopaLetrasIntento extends Model
{
    use HasFactory;

    protected $table = 'sopa_letras_intentos';

    protected $fillable = [
        'sopa_letras_id',
        'usuario_id',
        'palabras_encontradas',
        'puntaje_obtenido',
        'completado'
    ];

    public function sopaLetras()
    {
        return $this->belongsTo(SopaLetras::class, 'sopa_letras_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
