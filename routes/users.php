<?php

/**
 * Users specific routes.
 */

Route::group(['prefix' => 'users'], function () {
    Route::get('list', ['as' => 'users.list', 'uses' => 'UsersController@index']);
    Route::get('{username}', ['as' => 'user.profile', 'uses' => 'UsersController@show']);
    Route::post('follows/{followed_id}', ['as' => 'user.follow', 'uses' => 'FollowsController@follow']);
    Route::post('unfollow/{followed_id}', ['as' => 'user.unfollow', 'uses' => 'FollowsController@unFollow']);
});