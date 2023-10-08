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
Route::get('/form1', function () {
    return view('form1');
});
Route::get('/form2', function () {
    return view('form2');
});

Route::get('/form3', function () {
    return view('form3');
});
Route::get('/form4', function () {
    return view('/form4');
});
Route::get('/form5', function () {
    return view('form5');
});
