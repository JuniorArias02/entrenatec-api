<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $table = 'temas';

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'grado_id',
        'materia_id',
        'periodo_id',
        'creado_por',
        'portada',
        'orden',
        'estado'
    ];

    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }

    public function bloques()
    {
        return $this->hasMany(BloqueContenido::class);
    }
}
