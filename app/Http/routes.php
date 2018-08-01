<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the Routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'pagesController@home');
Route::get('/about/IEEE-MSB board', 'pagesController@aboutBoard');
Route::get('/about/About IEEE/', 'pagesController@aboutIEEE');
Route::get('/compitions/stc1/', 'pagesController@stc1');
Route::get('/contact us/', 'pagesController@contactUs');
Route::post('/contact us/', 'pagesController@sendmail');


Route::get('test', function () {
    echo Carbon\Carbon::now();
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This Route group applies the "web" middleware group to every Route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web', ['except' => ['index', 'show']]], function () {
    Route::auth();
    Route::resource('/cp', 'cpController');
    Route::resource('/events', 'eventsController');
    Route::resource('/about/volunteers', 'volunteersController');

});
