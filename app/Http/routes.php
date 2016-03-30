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
	Route::controller('/personil', 'personilController');
	// Route::get('/pulsa/{bulan}/{tahun}', 'pulsaController@pemakaian');
	// Route::get('/pulsa', 'pulsaController@viewHome');
	// Route::get('/pulsa/insert', 'pulsaController@getInsertPulsa');
	// Route::get('/ajax-nohp/{nohp}', 'pulsaController@getAjaxNohp');
});

Route::get('/', ['uses'=> 'pulsaController@getIndex', 'as'=>'home']);
Route::controller('/pulsa', 'pulsaController');

Route::controller('/auth', 'authController');

