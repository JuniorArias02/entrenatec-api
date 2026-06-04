<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Archivo\Acciones\SubirArchivoAccion;
use App\Presentacion\Requests\SubirArchivoRequest;
use OpenApi\Attributes as OA;

class ArchivoControlador extends Controller
{
    #[OA\Post(
        path: '/api/archivos',
        summary: 'Subir un archivo a la plataforma',
        security: [['bearerAuth' => []]],
        tags: ['Archivos']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'multipart/form-data',
            schema: new OA\Schema(
                required: ['archivo'],
                properties: [
                    new OA\Property(
                        property: 'archivo',
                        description: 'Archivo a subir (PDF, Imagen, Video, Doc, etc)',
                        type: 'string',
                        format: 'binary'
                    )
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Archivo subido con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Archivo subido con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'archivo_id', type: 'integer', example: 45),
                    new OA\Property(property: 'url', type: 'string', example: '/storage/archivos/file.pdf')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function subir(SubirArchivoRequest $request, SubirArchivoAccion $accion)
    {
        $usuario = auth('api')->user();
        if (!$usuario) {
            return response()->json([
                'mensaje' => 'No autorizado.',
                'datos' => [],
                'error' => true
            ], 401);
        }

        $archivo = $accion->ejecutar($request->file('archivo'), $usuario->id);

        return response()->json([
            'mensaje' => 'Archivo subido con éxito.',
            'datos' => [
                'archivo_id' => $archivo->id,
                'url' => $archivo->archivo
            ],
            'error' => false
        ], 201);
    }
}
