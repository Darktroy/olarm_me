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

    Route::get('/create','CountariesDetailsController@create')
         ->name('countaries_details.countaries_details.create');

    Route::get('/show/{countariesDetails}','CountariesDetailsController@show')
         ->name('countaries_details.countaries_details.show')
         ->where('id', '[0-9]+');

    Route::get('/{countariesDetails}/edit','CountariesDetailsController@edit')
         ->name('countaries_details.countaries_details.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'CountariesDetailsController@store')
         ->name('countaries_details.countaries_details.store');
               
    Route::put('countaries_details/{countariesDetails}', 'CountariesDetailsController@update')
         ->name('countaries_details.countaries_details.update')
         ->where('id', '[0-9]+');

    Route::delete('/countaries_details/{countariesDetails}','CountariesDetailsController@destroy')
         ->name('countaries_details.countaries_details.destroy')
         ->where('id', '[0-9]+');

});
