<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','CarController@listing');
Route::get('sameday/addcar','CarController@index');
Route::post('sameday/addcar','CarController@store');
Route::get('sameday/viewcar','CarController@viewcars');
Route::get('sameday/deletecar/{id}','CarController@delete');
Route::get('sameday/listings','CarController@listing');
Route::get('sameday/details','CarController@offers');
Route::get('sameday/cardetail/{id}','CarController@details');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
