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

Route::get('/', 'PagesController@home');

Route::get('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@register']);
Route::get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
Route::post('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('status', 'StatusController@index');