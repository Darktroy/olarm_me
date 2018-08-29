<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'API\AuthController@login');
//Route::post('login-by-mobile', 'API\AuthController@loginMobile');
Route::post('register', 'API\AuthController@register');
Route::post('register-mobile', 'API\AuthController@registerMobile');
Route::middleware('auth:api')->group(function(){
        Route::post('active-using-code', 'ActivationProcessesController@activeAccount');;

        Route::group([ 'prefix' => 'personal',], function () {

            Route::get('/', 'ProfilesController@index')->name('profiles.profile.index');
            Route::get('/create','ProfilesController@create')->name('profiles.profile.create');
            Route::get('/show/{profile}','ProfilesController@show')->name('profiles.profile.show')->where('id', '[0-9]+');
            Route::post('/show-my-profile','ProfilesController@showProfile')->name('profiles.profile.show')->where('id', '[0-9]+');
            Route::get('/{profile}/edit','ProfilesController@edit')->name('profiles.profile.edit')->where('id', '[0-9]+');
            Route::post('/', 'ProfilesController@store')->name('profiles.profile.store');
            Route::post('/profile-update', 'ProfilesController@updateMyProfile')->name('profiles.profile.update')->where('id', '[0-9]+');
            Route::post('/profile-update2', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');
            Route::delete('/profile/{profile}','ProfilesController@destroy')->name('profiles.profile.destroy')->where('id', '[0-9]+');
        });
        
        Route::post('showAllCards','CardsController@showAll')->name('cards.cards.show')->where('id', '[0-9]+');
        Route::post('create-cards', 'CardsController@store')->name('cards.cards.store');
        Route::post('update-own-card/{cards}', 'CardsController@update')->name('cards.cards.update')->where('id', '[0-9]+');
                  
        Route::group(
        [ 'prefix' => 'personal-card',], function () {
            Route::post('/', 'CardsController@store')->name('cards.cards.store');
            Route::get('/', 'CardsController@index')->name('cards.cards.index');
            Route::get('/create','CardsController@create')->name('cards.cards.create');
            Route::get('/show/{cards}','CardsController@show')->name('cards.cards.show')->where('id', '[0-9]+');
            Route::post('/show-my-card','CardsController@showPersonal');
            Route::get('/{cards}/edit','CardsController@edit')->name('cards.cards.edit')->where('id', '[0-9]+');
            Route::delete('/cards/{cards}','CardsController@destroy')->name('cards.cards.destroy')->where('id', '[0-9]+');

        });
  
        
        Route::post('add-card-to-card-holder', 'UserCardsController@store');
        Route::group(
        [ 'prefix' => 'cards-holders', ], function () {
            
            Route::get('/', 'CardsHoldersController@index')->name('cards_holders.cards_holder.index');
            Route::get('/create','CardsHoldersController@create')->name('cards_holders.cards_holder.create');
            Route::get('/show/{cardsHolder}','CardsHoldersController@show')->name('cards_holders.cards_holder.show')->where('id', '[0-9]+');
            Route::get('/{cardsHolder}/edit','CardsHoldersController@edit')->name('cards_holders.cards_holder.edit')->where('id', '[0-9]+');
            Route::post('/', 'CardsHoldersController@store')->name('cards_holders.cards_holder.store');
            Route::post('card-holder/{cardsHolder}', 'CardsHoldersController@update')->name('cards_holders.cards_holder.update')->where('id', '[0-9]+');
//            Route::put('card-holder/{cardsHolder}', 'CardsHoldersController@update')->name('cards_holders.cards_holder.update')->where('id', '[0-9]+');
            Route::delete('/cards_holder/{cardsHolder}','CardsHoldersController@destroy')->name('cards_holders.cards_holder.destroy')->where('id', '[0-9]+');

        });

});
//Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
