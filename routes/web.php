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

Route::group(
[
    'prefix' => 'interestes',
], function () {

    Route::get('/', 'InterestesController@index')
         ->name('interestes.interestes.index');

    Route::get('/create','InterestesController@create')
         ->name('interestes.interestes.create');

    Route::get('/show/{interestes}','InterestesController@show')
         ->name('interestes.interestes.show')
         ->where('id', '[0-9]+');

    Route::get('/{interestes}/edit','InterestesController@edit')
         ->name('interestes.interestes.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'InterestesController@store')
         ->name('interestes.interestes.store');
               
    Route::put('interestes/{interestes}', 'InterestesController@update')
         ->name('interestes.interestes.update')
         ->where('id', '[0-9]+');

    Route::delete('/interestes/{interestes}','InterestesController@destroy')
         ->name('interestes.interestes.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
['prefix' => 'card_to_interests',
], function () {

    Route::get('/', 'CardToInterestsController@index')
         ->name('card_to_interests.card_to_interests.index');

    Route::get('/create','CardToInterestsController@create')
         ->name('card_to_interests.card_to_interests.create');

    Route::get('/show/{cardToInterests}','CardToInterestsController@show')
         ->name('card_to_interests.card_to_interests.show')
         ->where('id', '[0-9]+');

    Route::get('/{cardToInterests}/edit','CardToInterestsController@edit')
         ->name('card_to_interests.card_to_interests.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'CardToInterestsController@store')
         ->name('card_to_interests.card_to_interests.store');
               
    Route::put('card_to_interests/{cardToInterests}', 'CardToInterestsController@update')
         ->name('card_to_interests.card_to_interests.update')
         ->where('id', '[0-9]+');

    Route::delete('/card_to_interests/{cardToInterests}','CardToInterestsController@destroy')
         ->name('card_to_interests.card_to_interests.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'faqs',
], function () {

    Route::get('/', 'FaqsController@index')
         ->name('faqs.faq.index');

    Route::get('/create','FaqsController@create')
         ->name('faqs.faq.create');

    Route::get('/show/{faq}','FaqsController@show')
         ->name('faqs.faq.show')
         ->where('id', '[0-9]+');

    Route::get('/{faq}/edit','FaqsController@edit')
         ->name('faqs.faq.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'FaqsController@store')
         ->name('faqs.faq.store');
               
    Route::put('faq/{faq}', 'FaqsController@update')
         ->name('faqs.faq.update')
         ->where('id', '[0-9]+');

    Route::delete('/faq/{faq}','FaqsController@destroy')
         ->name('faqs.faq.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'terms',
], function () {

    Route::get('/', 'TermsController@index')
         ->name('terms.terms.index');

    Route::get('/create','TermsController@create')
         ->name('terms.terms.create');

    Route::get('/show/{terms}','TermsController@show')
         ->name('terms.terms.show')
         ->where('id', '[0-9]+');

    Route::get('/{terms}/edit','TermsController@edit')
         ->name('terms.terms.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'TermsController@store')
         ->name('terms.terms.store');
               
    Route::put('terms/{terms}', 'TermsController@update')
         ->name('terms.terms.update')
         ->where('id', '[0-9]+');

    Route::delete('/terms/{terms}','TermsController@destroy')
         ->name('terms.terms.destroy')
         ->where('id', '[0-9]+');

});
