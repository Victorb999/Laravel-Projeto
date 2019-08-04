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

//Route::get('/', ['uses' => 'Controller@homepage']);
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ClienteController@index');
Route::get('/cliente/{cliente}/reprova','ClienteController@reprova')->name('cliente.reprova');
Route::get('/cliente/{cliente}/aprova','ClienteController@aprova')->name('cliente.aprova');

Route::resource('/cliente', 'ClienteController');
Route::resource('/validar', 'ValidarController');



