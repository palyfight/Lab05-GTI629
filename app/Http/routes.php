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

	Route::get('/', function() {
		return view('welcome');
	});

	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

	Route::auth();

	Route::get('/heimdall', function(){
		
		if(Entrust::hasRole('Admin')) {
			return Redirect::to('/admin');
		}

		if(Entrust::hasRole('square')){
			return Redirect::to('/square');
		}

		if(Entrust::hasRole('circle')){
			return Redirect::to('/circle');
		}

		return Redirect::to('/');
	});

	Route::group(['middleware' => ['role:Admin']], function(){
		Route::get('/admin', 'AdminController@index');
		Route::post('/admin/save', 'AdminController@save');
		Route::get('/admin/createuser', 'AdminController@createuser');
		Route::post('/admin/saveuser', 'AdminController@saveuser');
	});

	Route::group(['middleware' => ['role:square|Admin']], function(){
		Route::get('/square', 'SquareController@index');

	});

	Route::group(['middleware' => ['role:circle|Admin']], function(){
		Route::get('/circle', 'CircleController@index');
	});
