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

Route::get('/', 'UsuariosController@index');
Route::get('/usuarios', 'UsuariosController@index');
Route::get('/usuarios/show/{id}', 'UsuariosController@show');
Route::put('/usuarios/eliminar', 'UsuariosController@destroy');
Route::post('/usuarios/crear','UsuariosController@create');