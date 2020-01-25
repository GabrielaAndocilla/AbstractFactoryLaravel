<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Index');
});
Route::get('/Orden', function () {
    return view('Orden');
});
Route::get('[URL]', '[Controlador@metodo]');

Route::post('/Orden','FactorController@Tim')->name('vist');
