<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizIntentoRespuesta extends Model
{
    use HasFactory;

    protected $table = 'quiz_intento_respuestas';

    protected $fillable = [
        'intento_id',
        'pregunta_id',
        'respuesta_id',
        'es_correcta',
    ];

    public function intento()
    {
        return $this->belongsTo(QuizIntento::class, 'intento_id');
    }

    public function pregunta()
    {
        return $this->belongsTo(QuizPregunta::class, 'pregunta_id');
    }

    public function respuesta()
    {
        return $this->belongsTo(QuizRespuesta::class, 'respuesta_id');
    }
}
