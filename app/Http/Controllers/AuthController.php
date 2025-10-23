<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function loginForm()
    {
        return view('auth.login');
    }

    // Procesar inicio de sesión (sin Hash)
    public function loginPost(Request $request)
    {
        $usuario = Usuario::where('nombreUsuario', $request->nombreUsuario)->first();

        // Comparación directa (solo para pruebas)
        if ($usuario && $request->contrasenia === $usuario->contrasenia) {
            Auth::login($usuario);
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'nombreUsuario' => 'Usuario o contraseña incorrectos.',
        ])->onlyInput('nombreUsuario');
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login')->with('success', 'Sesión cerrada exitosamente');
    }
}
