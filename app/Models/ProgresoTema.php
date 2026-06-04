<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresoTema extends Model
{
    use HasFactory;

    protected $table = 'progreso_temas';

    protected $fillable = [
        'estudiante_uuid',
        'tema_id'
    ];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}
