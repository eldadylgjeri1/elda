<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test','PagesController@index');
Route::get('/test','PgController@Index');*/

/*Route::get('/about', function () {
    return view('vendor.about');
});


Route::get('/contact', function () {
    return view('vendor.contact');
});*/

Route::get('/contact', 'PController@getContact');

Route::get('/about', 'PController@getAbout');