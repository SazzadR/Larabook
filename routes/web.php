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

Route::get('status', ['as' => 'status.index', 'uses' => 'StatusesController@index']);
Route::post('status', ['as' => 'status.store', 'uses' => 'StatusesController@store']);

Route::group(['prefix' => 'status'], function () {
    Route::post('{statusId}/comment', ['as' => 'status.comment', 'uses' => 'CommentsController@store']);
    Route::post('like', ['as' => 'status.like', 'uses' => 'LikesController@like']);
});