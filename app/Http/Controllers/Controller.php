<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'EntrenaTech API',
    description: 'Documentación de la API de EntrenaTech (CMS Educativo).'
)]
#[OA\Server(
    url: '/api',
    description: 'Servidor Principal API'
)]
#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    name: 'Authorization',
    in: 'header',
    bearerFormat: 'JWT',
    scheme: 'bearer'
)]
abstract class Controller
{
    //
}
