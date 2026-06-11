<?php

namespace App\Infraestructura\Usuario\Correos;

use App\Models\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BienvenidaCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public Usuario $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function build()
    {
        return $this->subject('¡Bienvenido a EntrenaTech!')
                    ->view('correos.bienvenida');
    }
}
