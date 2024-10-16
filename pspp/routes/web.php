<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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



