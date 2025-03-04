<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    // Obtener los datos del formulario
        $user = $request->input('user');
        $password = $request->input('password');

    // Verificar si las credenciales son correctas
        if ($user === 'bruno' && $password === '12345') {
    // Si las credenciales son correctas, redirigir a la página principal (por ejemplo)
            return redirect()->route('home'); // Asegúrate de tener la ruta 'home' configurada
        } else {
    // Si las credenciales son incorrectas, mostrar un mensaje de error
            return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
        }
    }
}
?>
