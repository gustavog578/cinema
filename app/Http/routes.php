<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index');
Route::get('contact', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');

Route::resource('genero', 'GeneroController');
Route::get('genero/store', 'GeneroController@store');
Route::get('generos', 'GeneroController@listing');

Route::resource('pelicula','MovieController');

Route::resource('idioma', 'IdiomaController');
Route::get('idioma/store', 'IdiomaController@store');



Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');
