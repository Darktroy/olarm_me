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

//                  Password Rest
Route::post('reset-by-email', 'ResetstepsController@requestByEmail');
Route::post('confirm-by-SMS', 'ResetstepsController@confirmBySMS');
Route::post('new-password', 'API\AuthController@newPassReset');
Route::post('qr-code', function () {
    return QrCode::size(100)->generate(md5('iessa456'));
});

Route::middleware('auth:api')->group(function () {
    Route::post('set-my-location', 'UserLocationsController@setMyLocation');
    Route::post('set-my-location-and-get-near-by', 'UserLocationsController@setMyLocationAndNearBy');

    Route::post('get-user-tranfers-request-recomanded-transfer', 'UserCardsController@showUserTRRT');
    Route::post('get-user-card-holders', 'CardsHoldersController@showCardHoldersList');
    Route::post('get-cards-by-Cardholders', 'CardsHoldersController@showCardsOfHoldersList');
    Route::post('change-card-cardHolder', 'UserCardsController@moveChangingCardHolder');
    Route::post('show-my-cards', 'UserCardsController@showMyCards');
    Route::post('recommend-card', 'RecommendedCardsController@recommendCard');

    Route::post('show-industries-list', 'ProfilesController@showIndustriesList');
    Route::post('show-specialities-by-industry-name', 'ProfilesController@getISpeciatiesList');
    Route::post('show-countary-details-list', 'CountariesDetailsController@getCountriesList');
    Route::post('show-city-of-countary', 'CountariesDetailsController@getCitiesList');
    Route::post('show-district-of-city', 'CountariesDetailsController@getDistrictesList');

    Route::post('email-signature', 'EmailSignaturesController@showEmailSignature');
    Route::post('getLogs', 'RecentActivitiesController@getRecentActivity');
    Route::post('invite-contacts', 'InvitationContactsController@store');
    Route::post('get-stage', 'StagingsController@showStage');

    Route::post('add-card-to-card-holder', 'UserCardsController@store');
    Route::post('departments-list', 'DepartmentsController@listDepartments');
    Route::post('send-contact-us-message', 'MessagRecordsController@sendingTheMessage');

    Route::post('show-my-All-Cards', 'CardsController@showAll');
    Route::post('create-cards', 'CardsController@store')->name('cards.cards.store');
    Route::post('update-own-card/{cards}', 'CardsController@update')->name('cards.cards.update')->where('id', '[0-9]+');

    Route::group(
        ['prefix' => 'user_card_notes'], function () {
            Route::post('', 'UserCardNotesController@store');
        });

    Route::group(['prefix' => 'requests'], function () {
        Route::post('/show-my-All-rquests', 'RequestsController@index');
        Route::post('', 'RequestsController@store');
        Route::post('/approve-request', 'RequestsController@approveRequest');
        Route::post('/delete-request', 'RequestsController@deleteRequest');
    });

    Route::group(['prefix' => 'card_to_interests'], function () {
        Route::post('/show-personal-interested', 'CardToInterestsController@showPersonal');
        Route::post('/add-interest-to-cards', 'CardToInterestsController@store');
    });

    Route::post('active-using-code', 'ActivationProcessesController@activeAccount');

    Route::group(['prefix' => 'personal'], function () {
        Route::post('/show-my-profile', 'ProfilesController@showProfile')->name('profiles.profile.show')->where('id', '[0-9]+');
        Route::post('/', 'ProfilesController@store')->name('profiles.profile.store');
        Route::post('/profile-update', 'ProfilesController@updateMyProfile')->name('profiles.profile.update')->where('id', '[0-9]+');
        Route::post('/profile-update2', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');
    });

    Route::group(
    ['prefix' => 'personal-card'], function () {
        Route::post('/', 'CardsController@store')->name('cards.cards.store');
        Route::post('/androw', 'CardsController@storeAndrow')->name('cards.cards.store');
        Route::get('/', 'CardsController@index')->name('cards.cards.index');
        Route::get('/create', 'CardsController@create')->name('cards.cards.create');
        Route::get('/show/{cards}', 'CardsController@show')->name('cards.cards.show')->where('id', '[0-9]+');
        Route::post('/show-my-card', 'CardsController@showPersonal');
        Route::post('/search-card', 'CardsController@searching');
        Route::post('/advanced-search-card', 'CardsController@searchingAvanced');
        Route::post('/delete-own-card', 'CardsController@deleteOwnCard');
        Route::post('/remove-card-from-contacts', 'CardsController@removeCard');
        Route::get('/{cards}/edit', 'CardsController@edit')->name('cards.cards.edit')->where('id', '[0-9]+');
        Route::delete('/cards/{cards}', 'CardsController@destroy')->name('cards.cards.destroy')->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'cards-holders'], function () {
        Route::post('/', 'CardsHoldersController@store');
        Route::post('/show-all', 'CardsHoldersController@showAll');
        Route::post('/show-one', 'CardsHoldersController@show');
        Route::post('card-holder/{cardsHolder}', 'CardsHoldersController@update')->name('cards_holders.cards_holder.update')->where('id', '[0-9]+');
        Route::post('/delete', 'CardsHoldersController@destroy');
    });

    Route::group(['prefix' => 'interestes'], function () {
        Route::post('/get-all', 'InterestesController@index');

        Route::get('/create', 'InterestesController@create');

        Route::get('/show/{interestes}', 'InterestesController@show');

        Route::get('/{interestes}/edit', 'InterestesController@edit');

        Route::post('/', 'InterestesController@store');

        Route::put('interestes/{interestes}', 'InterestesController@update');

        Route::delete('/interestes/{interestes}', 'InterestesController@destroy');
    });
});
//Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
