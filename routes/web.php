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

Route::get('/', function () { return redirect('/noticias'); });
Route::get('/noticias', '\App\Http\Controllers\NoticiaController@index')->name('noticias.index');
Route::get('/noticias/{id}/{titulo}', '\App\Http\Controllers\NoticiaController@acessar')->name('noticias.acessar');
Route::get('/noticias/cadastrar', '\App\Http\Controllers\NoticiaController@cadastrar')->name('noticias.cadastrar');
Route::post('/noticias/salvar', '\App\Http\Controllers\NoticiaController@salvar')->name('noticias.salvar');