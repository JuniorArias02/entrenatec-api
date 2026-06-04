<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizPregunta extends Model
{
    protected $table = 'quiz_preguntas';
    
    // Custom updated_at handling if it doesn't exist in DB
    public $timestamps = false;

    protected $fillable = [
        'quiz_id',
        'pregunta',
        'tipo',
        'puntaje',
        'orden',
        'created_at'
    ];

    public function respuestas()
    {
        return $this->hasMany(QuizRespuesta::class, 'pregunta_id');
    }
}
