<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lipsum-generator', 'LipsumController@index')->name('lipsum-generator.index');
Route::get('/lipsum-generator/create', 'LipsumController@create')->name('lipsum-generator.create');
Route::post('/lipsum-generator', 'LipsumController@store')->name('lipsum-generator.store');
Route::get('/lipsum-generator/{book}', 'LipsumController@show')->name('lipsum-generator.show');
Route::get('/lipsum-generator/{book}/edit', 'LipsumController@edit')->name('lipsum-generator.edit');
Route::put('/lipsum-generator/{book}', 'LipsumController@update')->name('lipsum-generator.update');
Route::delete('/lipsum-generator/{book}', 'LipsumController@destroy')->name('lipsum-generator.destroy');

Route::get('/user-generator', 'UserController@index')->name('user-generator.index');
Route::get('/user-generator/create', 'UserController@create')->name('user-generator.create');
Route::post('/user-generator', 'UserController@store')->name('user-generator.store');
Route::get('/user-generator/{book}', 'UserController@show')->name('user-generator.show');
Route::get('/user-generator/{book}/edit', 'UserController@edit')->name('user-generator.edit');
Route::put('/user-generator/{book}', 'UserController@update')->name('user-generator.update');
Route::delete('/user-generator/{book}', 'UserController@destroy')->name('user-generator.destroy');
