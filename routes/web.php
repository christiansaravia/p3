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
    return view('index');
});

Route::get('/lipsum-generator', 'LipsumGeneratorController@get');
Route::post('/lipsum-generator', 'LipsumGeneratorController@post');

Route::get('/user-generator', 'UserGeneratorController@index');
Route::post('/user-generator', 'UserGeneratorController@store');
