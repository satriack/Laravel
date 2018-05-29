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
    return view('home');
});

Route::get('/input', 'controllercrud@input' );

Route::post('/input', 'controllercrud@insert' );

Route::get('/exception/index', 'ExceptionController@index');

Route::get('/read','controllercrud@read');

Route::delete('/delete/{id}','controllercrud@delete');

Route::get('/edit/{id}', 'controllercrud@edit' );

Route::put('/edit/{id}', 'controllercrud@update' );
