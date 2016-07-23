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

	Route::auth();
	Route::get('/home', 'HomeController@index');

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
		Route::post('settings/save', 'AdminController@save');
	});

	Route::group(['middleware' => ['role:square']], function(){

	});

	Route::group(['middleware' => ['role:circle']], function(){

	});
