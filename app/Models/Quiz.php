<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';

    protected $fillable = [
        'titulo',
        'descripcion',
        'tema_id',
        'grado_id',
        'materia_id',
        'periodo_id',
        'tiempo_limite',
        'puntaje_aprobacion',
        'intentos_maximos',
        'estado'
    ];

    public function preguntas()
    {
        return $this->hasMany(QuizPregunta::class, 'quiz_id');
    }
}
