<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archivo extends Model
{
    use SoftDeletes;

    const UPDATED_AT = null;

    protected $table = 'archivos';

    protected $fillable = [
        'nombre',
        'archivo',
        'extension',
        'mime_type',
        'peso',
        'subido_por'
    ];

    public function subidoPor()
    {
        return $this->belongsTo(Usuario::class, 'subido_por');
    }
}
