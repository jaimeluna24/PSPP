<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', "vistas.actividades")->name('inicio');

Route::view('/actividades', "vistas.actividades")->name('actividades');
Route::view('/crear-actividad', "vistas.crear-actividad")->name('crear-actividad');
// Route::view('/detalle-actividad', "vistas.detalle-actividad")->name('detalle-actividad');
Route::view('/crear-tarea', "vistas.crear-tarea")->name('crear-tarea');

Route::get('/detalle-actividad/{id}', function($id){
    return view('vistas.detalle-actividad', ['id' => $id]);
});



