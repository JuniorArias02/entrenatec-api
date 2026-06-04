<?php

namespace App\Aplicacion\Tema\Acciones;

use App\Models\Tema;
use App\Dominio\Tema\DTOs\CrearTemaDTO;
use Illuminate\Http\UploadedFile;

class CrearTemaAccion
{
    public function ejecutar(CrearTemaDTO $dto): Tema
    {
        $datos = $dto->aArray();

        if ($dto->portada instanceof UploadedFile) {
            $path = $dto->portada->store('portadas', 'public');
            $datos['portada'] = $path; // Guardará "portadas/nombre_archivo.jpg"
        }

        return Tema::create($datos);
    }
}
