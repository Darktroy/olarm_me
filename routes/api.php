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
Route::post('login-by-mobile', 'API\AuthController@loginMobile');
Route::post('register', 'API\AuthController@register');
Route::post('register-mobile', 'API\AuthController@registerMobile');
Route::middleware('auth:api')->group(function(){
        Route::post('active-using-code', 'ActivationProcessesController@activeAccount');;

        Route::group([ 'prefix' => 'profiles',], function () {

            Route::get('/', 'ProfilesController@index')->name('profiles.profile.index');

            Route::get('/create','ProfilesController@create')->name('profiles.profile.create');

            Route::get('/show/{profile}','ProfilesController@show')->name('profiles.profile.show')->where('id', '[0-9]+');

            Route::get('/{profile}/edit','ProfilesController@edit')->name('profiles.profile.edit')->where('id', '[0-9]+');

            Route::post('/', 'ProfilesController@store')->name('profiles.profile.store');

            Route::put('profile/{profile}', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');

            Route::delete('/profile/{profile}','ProfilesController@destroy')->name('profiles.profile.destroy')->where('id', '[0-9]+');

        });
  
});
//Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
