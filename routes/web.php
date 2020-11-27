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
    return view('welcome');
});

Route::get('/mesaje', 'Controller@mesaje');

Route::get('/admin/mesaje', 'Controller@vizualizareMesaje');

Route::get('/filtrareMesaje', 'Controller@filtrareMesaje');

Route::post('/contact', 'Controller@mesajSalvat');


