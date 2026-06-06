<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizIntento extends Model
{
    use HasFactory;

    protected $table = 'quiz_intentos';

    protected $fillable = [
        'quiz_id',
        'usuario_id',
        'puntaje_obtenido',
        'aprobado',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function respuestas()
    {
        return $this->hasMany(QuizIntentoRespuesta::class, 'intento_id');
    }
}
