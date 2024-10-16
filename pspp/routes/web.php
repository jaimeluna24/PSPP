<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/login', "auth.login")->name('login');
Route::view('/registro', "auth.register")->name('register');

Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::view('/', "vistas.actividades")->middleware('auth')->name('inicio');

Route::view('/actividades', "vistas.actividades")->middleware('auth')->name('actividades');
Route::view('/crear-actividad', "vistas.crear-actividad")->middleware('auth')->name('crear-actividad');
// Route::view('/detalle-actividad', "vistas.detalle-actividad")->name('detalle-actividad');
Route::view('/crear-tarea', "vistas.crear-tarea")->middleware('auth')->name('crear-tarea');

Route::get('/detalle-actividad/{id}', function($id){
    return view('vistas.detalle-actividad', ['id' => $id]);
})->middleware('auth');

Route::get('/register/verify/{code}', [LoginController::class, 'verify']);


// Formulario donde el usuario pone su email para que le enviemos el email de resetear la contraseña
Route::get('/formulario-recuperar-contrasenia', [AuthController::class, 'formularioRecuperarContrasenia'])->name('formulario-recuperar-contrasenia');

// Función que se ejecuta al enviar el formulario y que enviará el email al usuario
Route::post('/enviar-recuperar-contrasenia', [AuthController::class, 'enviarRecuperarContrasenia'])->name('enviar-recuperacion');

// Formulario donde se modificará la contraseña
Route::get('/reiniciar-contrasenia/{token}', [AuthController::class, 'formularioActualizacion'])->name('formulario-actualizar-contrasenia');

// Función que actualiza la contraseña del usuario
Route::post('/actualizar-contrasenia', [AuthController::class, 'actualizarContrasenia'])->name('actualizar-contrasenia');




