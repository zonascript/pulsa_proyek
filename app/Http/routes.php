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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', ['uses'=> 'pulsaController@index', 'as'=>'home']);
	Route::controller('/personil', 'personilController');
	Route::get('/pulsa/{bulan}/{tahun}', 'pulsaController@pemakaian');
});

Route::controller('/auth', 'authController');
Route::get('/', 'authController@index');

