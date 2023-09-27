<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Rutas de tipo petición
Route::get('/', function () {
     return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/recuerdos', function () {
    return view('recuerdos');
    });

//Rutas de tipo view
/* Route::view('/', 'welcome');
Route::view('/formulario', 'formulario');
Route::view('/recuerdos', 'recuerdos'); */
