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

use App\Http\Controllers\WelcomeUserController;

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

// Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');