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
    return view('form');
});

Route::get('/web', function () {
    return view('web');
});

Route::get('/quienes', function () {
    return view('quienes');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/edituser', function () {
    return view('edituser');
});

Route::post('user', 'UsersController@delete');
Route::post('userupdate', 'UsersController@update');


Route::get('/modificarUsuario{id}', 'UsuariosController@modificar');
Route::get('/modificarUsuarios{id}', 'UsuariosController@editar');

Route::get('/listadoUsuario', 'UsuariosController@listado');
Route::post('usuarios', 'UsuariosController@create');
Route::post('usuariosdelete', 'UsuariosController@delete');
Route::post('usuariosupdate', 'UsuariosController@update');

Route::get('/nuevoregistro', function(){
    return view('auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
