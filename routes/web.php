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



Route::group(
[ 'prefix' => 'user_cards',], function () {

    Route::get('/', 'UserCardsController@index')
         ->name('user_cards.user_cards.index');

    Route::get('/create','UserCardsController@create')
         ->name('user_cards.user_cards.create');

    Route::get('/show/{userCards}','UserCardsController@show')
         ->name('user_cards.user_cards.show')
         ->where('id', '[0-9]+');

    Route::get('/{userCards}/edit','UserCardsController@edit')
         ->name('user_cards.user_cards.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UserCardsController@store')
         ->name('user_cards.user_cards.store');
               
    Route::put('user_cards/{userCards}', 'UserCardsController@update')
         ->name('user_cards.user_cards.update')
         ->where('id', '[0-9]+');

    Route::delete('/user_cards/{userCards}','UserCardsController@destroy')
         ->name('user_cards.user_cards.destroy')
         ->where('id', '[0-9]+');

});
