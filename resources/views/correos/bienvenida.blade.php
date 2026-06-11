<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a EntrenaTech</title>
    <!-- Se importa la fuente oficial Rajdhani -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body { margin: 0; padding: 0; background-color: #F1F5F9; font-family: 'Rajdhani', Arial, sans-serif; -webkit-font-smoothing: antialiased; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; line-height: 100%; outline: none; text-decoration: none; }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F1F5F9;">
    <!-- Contenedor Principal -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F1F5F9; padding: 40px 20px;">
        <tr>
            <td align="center">
                <!-- Ventana Estilo Retro -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #FFFFFF; border: 2px solid #000000; box-shadow: 4px 4px 0px #000000;">
                    
                    <!-- Barra de Título (Windows 95 style) -->
                    <tr>
                        <td style="background-color: #0F172A; padding: 10px 15px; border-bottom: 2px solid #000000;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" style="color: #FFFFFF; font-family: 'Rajdhani', Arial, sans-serif; font-weight: 700; font-size: 16px; letter-spacing: 1px;">
                                        SISTEMA_ENTRENATECH.EXE
                                    </td>
                                    <td align="right" style="color: #FFFFFF; font-family: monospace; font-size: 16px; font-weight: bold;">
                                        _ &nbsp;[ ]&nbsp; X
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Contenido -->
                    <tr>
                        <td style="padding: 30px; font-family: 'Rajdhani', Arial, sans-serif; color: #0F172A;">
                            
                            <h1 style="margin: 0 0 20px 0; font-size: 32px; color: #2563EB; text-transform: uppercase; font-weight: 700;">
                                ¡CONEXIÓN ESTABLECIDA!
                            </h1>
                            
                            <p style="margin: 0 0 20px 0; font-size: 18px; line-height: 1.6; font-weight: 500;">
                                Hola <strong>{{ $usuario->nombre }}</strong>,
                            </p>
                            
                            <p style="margin: 0 0 20px 0; font-size: 18px; line-height: 1.6; font-weight: 500;">
                                Bienvenido a <strong>EntrenaTech</strong>. Tu perfil ha sido registrado en nuestra base de datos. Prepárate para experimentar el aprendizaje tecnológico con una estética digital única.
                            </p>

                            <!-- Tarjeta interna para datos (opcional) -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F1F5F9; border: 2px solid #000000; margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 15px; font-family: monospace; font-size: 14px; color: #0F172A;">
                                        > ESTADO_CUENTA: ACTIVA<br>
                                        > ROL_ASIGNADO: {{ $usuario->rol }}<br>
                                        > FECHA_ALTA: {{ now()->format('Y-m-d') }}
                                    </td>
                                </tr>
                            </table>

                            <!-- Botón -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center">
                                        <a href="{{ url('/login') }}" style="display: inline-block; background-color: #4FC3F7; color: #000000; font-family: 'Rajdhani', Arial, sans-serif; font-size: 18px; font-weight: 700; text-decoration: none; padding: 12px 30px; border: 2px solid #000000; box-shadow: 3px 3px 0px #000000; text-transform: uppercase;">
                                            INICIAR SISTEMA
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 30px 0 0 0; font-size: 14px; color: #64748B; font-weight: 500;">
                                Si no solicitaste acceso a esta red, puedes ignorar este mensaje y tu información será purgada automáticamente.
                            </p>

                        </td>
                    </tr>
                </table>

                <!-- Footer -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin-top: 20px;">
                    <tr>
                        <td align="center" style="font-family: 'Rajdhani', Arial, sans-serif; font-size: 14px; color: #0F172A; font-weight: 500;">
                            <p style="margin: 0 0 5px 0;">© 2026 EntrenaTech. Red de Aprendizaje.</p>
                            <p style="margin: 0;">Diseñado con estética retro, construido para el futuro.</p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>
</html>
