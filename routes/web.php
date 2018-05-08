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

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

//Se podria poner despues y sin where sin expresiones regulares
Route::get('/usuarios/{user}', 'UserController@show')
    ->name('users.show')
    ->where('user', '\d+');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController')->name('users');

Route::delete('/usuarios/{user}', 'UserController@destroy');
