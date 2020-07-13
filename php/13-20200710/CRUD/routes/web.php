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
Route::get('/phones', 'PhoneController@index')->name('index');
Route::get('/phones/create', 'PhoneController@create');
Route::post('/phones', 'PhoneController@store');
Route::get('/phones/{phone}', 'PhoneController@show');
Route::get('/phones/{phone}/edit', 'PhoneController@edit');
Route::put('/phones/{phone}', 'PhoneController@update');
Route::delete('phones/{phone}', 'PhoneController@destroy');
