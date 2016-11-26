<?php

/**
 * Authentications specific routes.
 */

Route::group(['prefix' => 'auth'], function () {
    Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@register']);
    Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);
    Route::get('password/reset', ['as' => 'auth.password.reset.showLinkRequest', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'auth.password.reset.sendResetEmail', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'auth.password.showResetForm', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\ResetPasswordController@reset']);
});