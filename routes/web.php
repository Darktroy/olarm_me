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
    'prefix' => 'countaries_details',
], function () {
    Route::get('/', 'CountariesDetailsController@index')
         ->name('countaries_details.countaries_details.index');

    Route::get('/create', 'CountariesDetailsController@create')
         ->name('countaries_details.countaries_details.create');

    Route::get('/show/{countariesDetails}', 'CountariesDetailsController@show')
         ->name('countaries_details.countaries_details.show')
         ->where('id', '[0-9]+');

    Route::get('/{countariesDetails}/edit', 'CountariesDetailsController@edit')
         ->name('countaries_details.countaries_details.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'CountariesDetailsController@store')
         ->name('countaries_details.countaries_details.store');

    Route::put('countaries_details/{countariesDetails}', 'CountariesDetailsController@update')
         ->name('countaries_details.countaries_details.update')
         ->where('id', '[0-9]+');

    Route::delete('/countaries_details/{countariesDetails}', 'CountariesDetailsController@destroy')
         ->name('countaries_details.countaries_details.destroy')
         ->where('id', '[0-9]+');
});

Route::group(
[
    'prefix' => 'recommended_cards',
], function () {
    Route::get('/', 'RecommendedCardsController@index')
         ->name('recommended_cards.recommended_cards.index');

    Route::get('/create', 'RecommendedCardsController@create')
         ->name('recommended_cards.recommended_cards.create');

    Route::get('/show/{recommendedCards}', 'RecommendedCardsController@show')
         ->name('recommended_cards.recommended_cards.show')
         ->where('id', '[0-9]+');

    Route::get('/{recommendedCards}/edit', 'RecommendedCardsController@edit')
         ->name('recommended_cards.recommended_cards.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RecommendedCardsController@store')
         ->name('recommended_cards.recommended_cards.store');

    Route::put('recommended_cards/{recommendedCards}', 'RecommendedCardsController@update')
         ->name('recommended_cards.recommended_cards.update')
         ->where('id', '[0-9]+');

    Route::delete('/recommended_cards/{recommendedCards}', 'RecommendedCardsController@destroy')
         ->name('recommended_cards.recommended_cards.destroy')
         ->where('id', '[0-9]+');
});

Route::group(
[
    'prefix' => 'user_locations',
], function () {
    Route::get('/', 'UserLocationsController@index')
         ->name('user_locations.user_location.index');

    Route::get('/create', 'UserLocationsController@create')
         ->name('user_locations.user_location.create');

    Route::get('/show/{userLocation}', 'UserLocationsController@show')
         ->name('user_locations.user_location.show')
         ->where('id', '[0-9]+');

    Route::get('/{userLocation}/edit', 'UserLocationsController@edit')
         ->name('user_locations.user_location.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UserLocationsController@store')
         ->name('user_locations.user_location.store');

    Route::put('user_location/{userLocation}', 'UserLocationsController@update')
         ->name('user_locations.user_location.update')
         ->where('id', '[0-9]+');

    Route::delete('/user_location/{userLocation}', 'UserLocationsController@destroy')
         ->name('user_locations.user_location.destroy')
         ->where('id', '[0-9]+');
});

Route::group(
[
    'prefix' => 'qr_code_users',
], function () {

    Route::get('/', 'QrCodeUsersController@index')
         ->name('qr_code_users.qr_code_user.index');

    Route::get('/create','QrCodeUsersController@create')
         ->name('qr_code_users.qr_code_user.create');

    Route::get('/show/{qrCodeUser}','QrCodeUsersController@show')
         ->name('qr_code_users.qr_code_user.show')
         ->where('id', '[0-9]+');

    Route::get('/{qrCodeUser}/edit','QrCodeUsersController@edit')
         ->name('qr_code_users.qr_code_user.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'QrCodeUsersController@store')
         ->name('qr_code_users.qr_code_user.store');
               
    Route::put('qr_code_user/{qrCodeUser}', 'QrCodeUsersController@update')
         ->name('qr_code_users.qr_code_user.update')
         ->where('id', '[0-9]+');

    Route::delete('/qr_code_user/{qrCodeUser}','QrCodeUsersController@destroy')
         ->name('qr_code_users.qr_code_user.destroy')
         ->where('id', '[0-9]+');

});
