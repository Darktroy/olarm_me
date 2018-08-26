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

Route::group(
[
    'prefix' => 'activation_processes',
], function () {

    Route::get('/', 'ActivationProcessesController@index')
         ->name('activation_processes.activation_process.index');

    Route::get('/create','ActivationProcessesController@create')
         ->name('activation_processes.activation_process.create');

    Route::get('/show/{activationProcess}','ActivationProcessesController@show')
         ->name('activation_processes.activation_process.show')
         ->where('id', '[0-9]+');

    Route::get('/{activationProcess}/edit','ActivationProcessesController@edit')
         ->name('activation_processes.activation_process.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ActivationProcessesController@store')
         ->name('activation_processes.activation_process.store');
               
    Route::put('activation_process/{activationProcess}', 'ActivationProcessesController@update')
         ->name('activation_processes.activation_process.update')
         ->where('id', '[0-9]+');

    Route::delete('/activation_process/{activationProcess}','ActivationProcessesController@destroy')
         ->name('activation_processes.activation_process.destroy')
         ->where('id', '[0-9]+');

});


