<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloqueContenido extends Model
{
    use HasFactory;

    protected $table = 'bloques_contenido';

    protected $fillable = [
        'tema_id',
        'tipo',
        'contenido',
        'metadata',
        'orden',
        'visible'
    ];

    protected $casts = [
        'metadata' => 'array',
        'visible' => 'boolean'
    ];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}
