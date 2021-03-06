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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/*
Route::post('upload', function(){
		echo 'hello'; 
	});
*/

Route::post('upload', 'UploadController@upload');

Route::get('/', function () {
    return view('welcome');
});
