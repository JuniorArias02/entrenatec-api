<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta de Seguridad - EntrenaTech</title>
    <!-- Se importa la fuente oficial Rajdhani -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
    <style>
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
                    
                    <!-- Barra de Título (Windows 95 style, color alerta) -->
                    <tr>
                        <td style="background-color: #2563EB; padding: 10px 15px; border-bottom: 2px solid #000000;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" style="color: #FFFFFF; font-family: 'Rajdhani', Arial, sans-serif; font-weight: 700; font-size: 16px; letter-spacing: 1px;">
                                        ALERTA_SISTEMA.EXE
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
                            
                            <h1 style="margin: 0 0 20px 0; font-size: 28px; color: #0F172A; text-transform: uppercase; font-weight: 700;">
                                NUEVA CONEXIÓN DETECTADA
                            </h1>
                            
                            <p style="margin: 0 0 20px 0; font-size: 18px; line-height: 1.6; font-weight: 500;">
                                Hola <strong>{{ $usuario->nombre }}</strong>,
                            </p>
                            
                            <p style="margin: 0 0 20px 0; font-size: 18px; line-height: 1.6; font-weight: 500;">
                                Nuestros registros indican un nuevo inicio de sesión en tu cuenta de EntrenaTech. A continuación se muestran los datos de la conexión:
                            </p>

                            <!-- Tarjeta interna de datos técnicos -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F1F5F9; border: 2px solid #000000; margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 15px; font-family: monospace; font-size: 14px; color: #0F172A; line-height: 1.8;">
                                        <strong>FECHA/HORA:</strong> {{ $fecha_hora }}<br>
                                        <strong>DISPOSITIVO:</strong> {{ $dispositivo }}<br>
                                        <strong>DIRECCIÓN_IP:</strong> {{ $direccion_ip }}
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 0 0 30px 0; font-size: 16px; line-height: 1.6; font-weight: 500;">
                                Si reconoces esta actividad, puedes ignorar esta alerta de forma segura. Si no fuiste tú, por favor protege tu cuenta de inmediato.
                            </p>

                            <!-- Botón de acción -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center">
                                        <a href="{{ url('/password/reset') }}" style="display: inline-block; background-color: #0F172A; color: #FFFFFF; font-family: 'Rajdhani', Arial, sans-serif; font-size: 16px; font-weight: 700; text-decoration: none; padding: 12px 24px; border: 2px solid #000000; box-shadow: 3px 3px 0px #000000; text-transform: uppercase;">
                                            [!] REPORTAR ACTIVIDAD
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>

                <!-- Footer -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin-top: 20px;">
                    <tr>
                        <td align="center" style="font-family: 'Rajdhani', Arial, sans-serif; font-size: 14px; color: #0F172A; font-weight: 500;">
                            <p style="margin: 0 0 5px 0;">Este es un mensaje automático generado por EntrenaTech.</p>
                            <p style="margin: 0;">Por favor no respondas a este correo.</p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>
</html>
