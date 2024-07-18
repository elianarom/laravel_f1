<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\CheckRol;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])
    ->name('home');

Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])
    ->name('auth.loginForm');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProceso"])
    ->name('auth.loginProceso');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProceso"])
    ->name('auth.logoutProceso');

Route::get('/admin', [\App\Http\Controllers\UserController::class, "adminDashboard"])
    ->name('admin.dashboard')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::get('/noticias', [\App\Http\Controllers\NoticiasController::class, "index"])
    ->name('noticias.index');
Route::get('/noticias/{id}', [\App\Http\Controllers\NoticiasController::class, "vista"])
    ->name('noticias.vista')
    ->whereNumber('id');
Route::get('/noticias/crear', [\App\Http\Controllers\NoticiasController::class, "crearNoticia"])
    ->name('noticias.crearNoticia')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);
Route::post('/noticias/crear', [\App\Http\Controllers\NoticiasController::class, "crearProceso"])
    ->name('noticias.crearProceso')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::get('/noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, "editarForm"])
    ->name('noticias.editarForm')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::post('/noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, "editarProceso"])
    ->name('noticias.editarProceso')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::get('/noticias/{id}/eliminar', [\App\Http\Controllers\NoticiasController::class, "eliminarForm"])
    ->name('noticias.eliminarForm')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::post('/noticias/{id}/eliminar', [\App\Http\Controllers\NoticiasController::class, "eliminarProceso"])
    ->name('noticias.eliminarProceso')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);

Route::get('/usuarios', [\App\Http\Controllers\UserController::class, "indexUsuarios"])
    ->name('usuarios.index')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);
Route::get('/usuarios/{id}', [\App\Http\Controllers\UserController::class, "vistaUsuario"])
    ->name('usuarios.vista')
    ->middleware('auth')
    ->whereNumber('id');
Route::get('/registrarse', [\App\Http\Controllers\UserController::class, "registroUsuario"])
    ->name('usuarios.crearUsuario');
Route::post('/registrarse', [\App\Http\Controllers\UserController::class, "registroProceso"])
    ->name('usuarios.crearProceso');
Route::get('/usuarios/{id}/editar', [\App\Http\Controllers\UserController::class, "editarUsuario"])
    ->name('usuarios.editarUsuario')
    ->whereNumber('id')
    ->middleware('auth');
Route::post('/usuarios/{id}/editar', [\App\Http\Controllers\UserController::class, "editarUsuarioProceso"])
    ->name('usuarios.editarUsuarioProceso')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);
Route::get('/usuarios/{id}/eliminar', [\App\Http\Controllers\UserController::class, "eliminarUsuarioForm"])
    ->name('usuarios.eliminarUsuarioForm')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);
Route::post('/usuarios/{id}/eliminar', [\App\Http\Controllers\UserController::class, "eliminarUsuarioProceso"])
    ->name('usuarios.eliminarUsuarioProceso')
    ->whereNumber('id')
    ->middleware('auth', \App\Http\Middleware\CheckRol::class);
