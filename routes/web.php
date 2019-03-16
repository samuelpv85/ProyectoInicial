<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/registro', function () {
//     return view('registro');
// });

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


// Route::get('foo', function () {
//     return 'Hello World';
// });