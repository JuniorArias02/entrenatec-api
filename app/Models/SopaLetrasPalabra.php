<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SopaLetrasPalabra extends Model
{
    use HasFactory;

    protected $table = 'sopa_letras_palabras';

    protected $fillable = [
        'sopa_letras_id',
        'palabra'
    ];

    public function sopaLetras()
    {
        return $this->belongsTo(SopaLetras::class, 'sopa_letras_id');
    }
}
