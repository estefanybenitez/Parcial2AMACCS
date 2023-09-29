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

Route::get('/', function () {
    return view('Home');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/proyectos', function () {
    return view('/proyectos');
});
Route::get('/trabajos', function () {
    return view('trabajos');
});
