<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.loginForm');
    }

    public function loginProceso(Request $request)
    {
        $credenciales = $request->only(['email', 'password']);
        if(!auth()->attempt($credenciales)) {
            return redirect()
                ->back(fallback: route('auth.loginForm'))
                ->withInput()
                ->with('mensaje', 'Usuario y/o contraseña incorrecto/s.')
                ->with('feedback.type', 'danger');
        }

        $user = auth()->user();

        return redirect()
            ->route('home')
            ->with('mensaje', 'Bienvenido! <b> ' . $user->email . '</b>');
    }

    public function logoutProceso(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.loginForm')
            ->with('mensaje', 'Cerraste sesión. <b> ¡Te esperamos pronto!</b>');
    }
}
