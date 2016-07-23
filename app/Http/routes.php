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


Route::group(['middleware' => 'web'], function(){
	Route::auth();
	Route::get('/', function() {
		return view('welcome');
	});
	Route::get('/home', 'HomeController@index');
});

Route::get('/createRoles', function(){
	$admin = new Role();
	$admin->name = 'admin';
	$admin->display_name = 'User Administrator';
	$admin->description = 'User Administrator allowed can change config';
	$admin->save();

	$square = new Role();
	$square->name = 'square';
	$square->display_name = 'User square';
	$square->description = 'User square allowed can see square';
	$square->save();

	$circle = new Role();
	$circle->name = 'circle';
	$circle->display_name = 'User circle';
	$circle->description = 'User circle allowed can see circle';
	$circle->save();
	
	return 'shit is done';
});