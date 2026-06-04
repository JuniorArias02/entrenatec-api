<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizRespuesta extends Model
{
    protected $table = 'quiz_respuestas';
    
    public $timestamps = false;

    protected $fillable = [
        'pregunta_id',
        'respuesta',
        'es_correcta',
        'created_at'
    ];
}
