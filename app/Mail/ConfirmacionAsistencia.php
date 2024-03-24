<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmacionAsistencia extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $mensaje;

    public function __construct($nombre, $mensaje)
    {
        $this->nombre = $nombre;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->subject('Confirmación de asistencia')->view('emails.confirmacion');
    }
}
