<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/add', function () {
    return view('adicionarContato');
});
// Route::post('/add', ContatoController@store {
// });

Route::get('/edit', function () {
    return view('editarContato');
});
Route::post('/edit', function () {
    return view('editarContato');
});

Route::get('/list', function () {
    return view('lista');
});

Route::get('/delete', function () {
    return view('lista');
});
