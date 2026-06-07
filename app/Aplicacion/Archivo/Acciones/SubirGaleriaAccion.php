<?php

namespace App\Aplicacion\Archivo\Acciones;

use App\Dominio\Archivo\Contratos\ArchivoRepositorio;
use App\Models\Archivo;
use Illuminate\Http\UploadedFile;

class SubirGaleriaAccion
{
    public function __construct(
        private readonly ArchivoRepositorio $repositorio
    ) {}

    /**
     * @param UploadedFile[] $imagenes
     * @param int $usuarioId
     * @return array
     */
    public function ejecutar(array $imagenes, int $usuarioId): array
    {
        $archivosGuardados = [];

        foreach ($imagenes as $imagen) {
            $nombreOriginal = $imagen->getClientOriginalName();
            $extension = $imagen->getClientOriginalExtension();
            $mimeType = $imagen->getClientMimeType();
            $peso = $imagen->getSize();

            // Almacenar en storage/app/public/galeria
            $rutaGuardada = $imagen->store('galeria', 'public');

            $archivoObj = $this->repositorio->crear([
                'nombre' => $nombreOriginal,
                'archivo' => '/storage/' . $rutaGuardada,
                'extension' => $extension,
                'mime_type' => $mimeType,
                'peso' => $peso,
                'subido_por' => $usuarioId
            ]);

            $archivosGuardados[] = [
                'archivo_id' => $archivoObj->id,
                'url' => $archivoObj->archivo
            ];
        }

        return $archivosGuardados;
    }
}
