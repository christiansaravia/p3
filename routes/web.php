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
    return view('home');
});

Route::get('/lipsum-generator', 'LipsumGeneratorController@index')->name('lipsum-generator.index');
Route::post('/lipsum-generator', 'LipsumGeneratorController@generate')->name('lipsum-generator.generate');

Route::get('/user-generator', 'UserGeneratorController@index')->name('user-generator.index');
Route::post('/user-generator', 'UserGeneratorController@generate')->name('user-generator.generate');
