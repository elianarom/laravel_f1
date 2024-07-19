<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Suscripcion;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminDashboard()
    {
        $noticias = Noticia::all();
        return view('admin.dashboard', [
            'noticias' => $noticias,
        ]);
    }


    public function indexUsuarios()
    {
        $usuarios = User::with('rols')->get();
        return view('usuarios.index', [
            'usuarios' => $usuarios,
        ]);
    }

    public function vistaUsuario(int $id)
    {
        $usuario = User::findOrFail($id);

        return view('usuarios.vista', [
            'usuario' => $usuario,
        ]);
    }

    public function registroUsuario()
    {
        return view('usuarios.crearUsuario', [
            'suscripciones' => Suscripcion::all()
        ]);
    }

    public function registroProceso(Request $request)
    {
        $input = $request->input();

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
            'suscripcion_fk' => 'required',
        ]);

        $user = User::create([
            'nombre' => $input['nombre'],
            'apellido'=> $input['apellido'],
            'email' => $input['email'],
            'password' => \Hash::make($input['password']),
            'suscripcion_fk' => $input['suscripcion_fk']
        ]);

        return redirect()
            ->route('auth.loginForm')
            ->with('mensaje', 'El usuario se registró con éxito.');
    }

    public function editarUsuario(int $id)
    {
        return view('usuarios.editarUsuario', [
            'usuario' => User::findOrFail($id),
             'suscripciones' => Suscripcion::all()
        ]);
    }

    public function editarUsuarioProceso(int $id, Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
            'suscripcion_fk' => 'required'
        ]);

        $input = $request->only(['nombre', 'apellido', 'email', 'password', 'suscripcion_fk']);

        $usuario = User::findOrFail($id);

        $usuario->update($input);

        return redirect()
            ->route('usuarios.index')
            ->with('mensaje', 'El usuario <b>' . e($input['email']) . ' </b>se editó con éxito.');
    }

    public function eliminarUsuarioForm(int $id)
    {
        return view('usuarios.eliminarUsuarioForm', [
            'usuario' => User::findOrFail($id),
        ]);
    }

    public function eliminarUsuarioProceso(int $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()
            ->route('usuarios.index')
            ->with('mensaje', 'El usuario <b>' . e($usuario->email) . ' </b>se eliminó con éxito.');
    }
}
