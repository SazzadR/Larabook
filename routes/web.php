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

Route::group(['prefix' => 'auth'], function () {
    Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@register']);
    Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);
});

Route::get('status', ['as' => 'status.index', 'uses' => 'StatusesController@index']);
Route::post('status', ['as' => 'status.store', 'uses' => 'StatusesController@store']);

Route::group(['prefix' => 'users'], function () {
    Route::get('list', ['as' => 'users.list', 'uses' => 'UsersController@index']);
    Route::get('{username}', ['as' => 'user.profile', 'uses' => 'UsersController@show']);
    Route::post('follows/{followed_id}', ['as' => 'user.follow', 'uses' => 'FollowsController@follow']);
    Route::post('unfollow/{followed_id}', ['as' => 'user.unfollow', 'uses' => 'FollowsController@unFollow']);
});