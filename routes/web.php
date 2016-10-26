<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/home',array('as'=>'home','uses'=>'confirmationController@home'));

Route::get('/logout',array('as'=>'logout','uses'=>'confirmationController@logout'));

Route::get('/',array('as'=>'newRegister','uses'=>'confirmationController@index'));

Route::get('/dashboard',array('as'=>'gdashboard','uses'=>'confirmationController@getdashboard'));

Route::get('/forgettpassword',array('as'=>'forgettpassword','uses'=>'resetpasswordController@index'));

Route::get('/resetpasswordform',array('as'=>'resetpasswordform','uses'=>'resetpasswordController@resetform'));


Route::get('/signin',array('as'=>'signin','uses'=>'confirmationController@signin'));



Route::post('/dashboard',array('as'=>'pdashboard','uses'=>'confirmationController@postdashboard'));


Route::post('/signincheck',array('as'=>'signincheck','uses'=>'confirmationController@signincheck'));

Route::post('/createRegister',array('as'=>'createRegister','uses'=>'confirmationController@createRegister'));

Route::post('/createOrchestraRegister',array('as'=>'createOrchestraRegister','uses'=>'confirmationController@createOrchestraRegister'));

Route::post('/resetpassword',array('as'=>'resetpassword','uses'=>'resetpasswordController@resetpasswordemail'));

Route::post('/resetpasswordDB',array('as'=>'resetpasswordDB','uses'=>'resetpasswordController@resetpasswordDB'));