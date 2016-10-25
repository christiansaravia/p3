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

Route::get('/lipsum-generator', 'user-generator@index')->name('lipsum-generator.index');
Route::get('/lipsum-generator/create', 'LipsumGeneratorController@create')->name('lipsum-generator.create');
Route::post('/lipsum-generator', 'LipsumGeneratorController@store')->name('lipsum-generator.store');
Route::get('/lipsum-generator/{book}', 'LipsumGeneratorController@show')->name('lipsum-generator.show');
Route::get('/lipsum-generator/{book}/edit', 'LipsumGeneratorController@edit')->name('lipsum-generator.edit');
Route::put('/lipsum-generator/{book}', 'LipsumGeneratorController@update')->name('lipsum-generator.update');
Route::delete('/lipsum-generator/{book}', 'LipsumGeneratorController@destroy')->name('lipsum-generator.destroy');

Route::get('/user-generator', 'UserGeneratorController@index')->name('user-generator.index');
Route::get('/user-generator/create', 'UserGeneratorController@create')->name('user-generator.create');
Route::post('/user-generator', 'UserGeneratorController@store')->name('user-generator.store');
Route::get('/user-generator/{book}', 'UserGeneratorController@show')->name('user-generator.show');
Route::get('/user-generator/{book}/edit', 'UserGeneratorController@edit')->name('user-generator.edit');
Route::put('/user-generator/{book}', 'UserGeneratorController@update')->name('user-generator.update');
Route::delete('/user-generator/{book}', 'UserGeneratorController@destroy')->name('user-generator.destroy');
