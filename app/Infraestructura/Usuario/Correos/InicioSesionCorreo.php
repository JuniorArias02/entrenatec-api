<?php

namespace App\Infraestructura\Usuario\Correos;

use App\Models\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InicioSesionCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public Usuario $usuario;
    public string $fecha_hora;
    public string $dispositivo;
    public string $direccion_ip;

    public function __construct(Usuario $usuario, string $fecha_hora, string $dispositivo, string $direccion_ip)
    {
        $this->usuario = $usuario;
        $this->fecha_hora = $fecha_hora;
        $this->dispositivo = $dispositivo;
        $this->direccion_ip = $direccion_ip;
    }

    public function build()
    {
        return $this->subject('Alerta de Seguridad: Nueva Conexión')
                    ->view('correos.inicio_sesion');
    }
}
