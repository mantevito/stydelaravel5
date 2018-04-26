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
    //return 'view('welcome')';
    return 'Home';
});

Route::get('/usuarios', 'UserController@index')->name('users.index');

//Se podria poner despues y sin where sin expresiones regulares
Route::get('/usuarios/{id}', 'UserController@show')->name('users.show')
->where('id', '\d+');

Route::get('/usuarios/nuevo', 'UserController@create')->name('create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')->name('users');
