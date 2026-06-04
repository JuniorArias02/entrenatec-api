<?php

namespace App\Aplicacion\Tema\Acciones;

use App\Models\Tema;
use Illuminate\Http\UploadedFile;

class ActualizarTemaAccion
{
    public function ejecutar(int $id, array $datos): Tema
    {
        $tema = Tema::findOrFail($id);

        // Si se envía una nueva portada como archivo
        if (isset($datos['portada']) && $datos['portada'] instanceof UploadedFile) {
            $path = $datos['portada']->store('portadas', 'public');
            $datos['portada'] = $path;
        }

        $tema->update(array_filter($datos, function ($value) {
            return $value !== null;
        }));

        return $tema;
    }
}
