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

//STORE
Route::get('/rent', 	['uses' => 'RentController@index',	'as' => 'rent.toys']);

Route::post('/rent', 	['uses' => 'RentController@post',	'as' => 'renting.toys']);


//BACKOFFICE
Route::get('/pay', 		['uses' => 'PayController@index',	'as' => 'pay.toys']);

Route::post('/pay', 	['uses' => 'PayController@post',	'as' => 'paying.toys']);
