<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitado;
use App\Mail\ConfirmacionAsistencia;
use Illuminate\Support\Facades\Mail;

class InvitadoController extends Controller
{
    // Método para mostrar el formulario de asistencia
    public function mostrarFormularioAsistencia()
    {
        $invitados = Invitado::all(); 
        return view('asistencia', compact('invitados'));
    }

    public function obtenerBoletosDisponibles($idSeleccionado)
    {
        $boletosDisponibles = Invitado::where('id', $idSeleccionado)->value('Boletos'); 
        return view('asistencia', compact('boletosDisponibles'));
    }



    // Método para enviar el correo electrónico de confirmación de asistencia
    public function enviarCorreo(Request $request)
    {
        // Validar y procesar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'boletos' => 'required|integer|min:1',
            // Agrega validaciones adicionales según sea necesario
        ]);

        $nombre = $request->input('nombre');
        $boletosDisponibles = Invitado::where('Nombre', $nombre)->value('Boletos');

        // Verificar si se encontró el nombre en la base de datos
        if ($boletosDisponibles !== null) {
            $boletos = $request->input('boletos');

            // Verificar si la cantidad de boletos solicitados no excede los disponibles
            if ($boletos <= $boletosDisponibles) {
                $mensaje = "Acepto ir a tu boda";

                // Enviar correo electrónico
                Mail::to('danielaceves.mx@gmail.com')->send(new ConfirmacionAsistencia($nombre, $mensaje));

                return "Correo enviado con éxito.";
            } else {
                return back()->withInput()->withErrors(['boletos' => 'La cantidad de boletos solicitados excede los disponibles']);
            }
        } else {
            return back()->withInput()->withErrors(['nombre' => 'El nombre seleccionado no existe en la base de datos']);
        }
    }

    



    

}

