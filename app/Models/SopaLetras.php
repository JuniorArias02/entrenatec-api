<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SopaLetras extends Model
{
    use HasFactory;

    protected $table = 'sopa_letras';

    protected $fillable = [
        'titulo',
        'descripcion',
        'tema_id',
        'grado_id',
        'materia_id',
        'periodo_id',
        'tiempo_limite',
        'puntaje_total',
        'estado'
    ];

    public function palabras()
    {
        return $this->hasMany(SopaLetrasPalabra::class, 'sopa_letras_id');
    }

    public function intentos()
    {
        return $this->hasMany(SopaLetrasIntento::class, 'sopa_letras_id');
    }
}
