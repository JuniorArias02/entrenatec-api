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
        ], 201);
    }

    #[OA\Post(
        path: '/api/archivos/galeria',
        summary: 'Subir múltiples imágenes para una galería',
        security: [['bearerAuth' => []]],
        tags: ['Archivos']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'multipart/form-data',
            schema: new OA\Schema(
                required: ['imagenes[]'],
                properties: [
                    new OA\Property(
                        property: 'imagenes[]',
                        description: 'Arreglo de imágenes a subir (jpeg, png, jpg, webp, etc)',
                        type: 'array',
                        items: new OA\Items(type: 'string', format: 'binary')
                    )
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Imágenes subidas con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Imágenes subidas con éxito.'),
                new OA\Property(
                    property: 'datos', 
                    type: 'array', 
                    items: new OA\Items(
                        properties: [
                            new OA\Property(property: 'archivo_id', type: 'integer', example: 46),
                            new OA\Property(property: 'url', type: 'string', example: '/storage/galeria/img1.jpg')
                        ]
                    )
                ),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function subirGaleria(\App\Presentacion\Requests\SubirGaleriaRequest $request, \App\Aplicacion\Archivo\Acciones\SubirGaleriaAccion $accion)
    {
        $usuario = auth('api')->user();
        if (!$usuario) {
            return response()->json([
                'mensaje' => 'No autorizado.',
                'datos' => [],
                'error' => true
            ], 401);
        }

        $resultados = $accion->ejecutar($request->file('imagenes'), $usuario->id);

        return response()->json([
            'mensaje' => 'Imágenes subidas con éxito.',
            'datos' => $resultados,
            'error' => false
        ], 201);
    }
}
