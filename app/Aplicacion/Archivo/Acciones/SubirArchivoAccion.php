<?php

namespace App\Aplicacion\Archivo\Acciones;

use App\Dominio\Archivo\Contratos\ArchivoRepositorio;
use App\Models\Archivo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class SubirArchivoAccion
{
    public function __construct(
        private readonly ArchivoRepositorio $repositorio
    ) {}

    public function ejecutar(UploadedFile $archivoUpload, int $usuarioId): Archivo
    {
        $nombreOriginal = $archivoUpload->getClientOriginalName();
        $extension = $archivoUpload->getClientOriginalExtension();
        $mimeType = $archivoUpload->getClientMimeType();
        $peso = $archivoUpload->getSize();

        // Almacenar en storage/app/public/archivos
        $rutaGuardada = $archivoUpload->store('archivos', 'public');

        return $this->repositorio->crear([
            'nombre' => $nombreOriginal,
            'archivo' => '/storage/' . $rutaGuardada,
            'extension' => $extension,
            'mime_type' => $mimeType,
            'peso' => $peso,
            'subido_por' => $usuarioId
        ]);
    }
}
