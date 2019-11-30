<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {

	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.'], function() {
	Route::get('/', 'Account\AccountController@index')->name('index');

	/**
	 * profile
	 */
	Route::get('profile', 'Account\ProfileController@index')->name('profile.index');
	Route::post('profile', 'Account\ProfileController@store')->name('profile.store');

	/**
	 * password
	 */
	Route::get('password', 'Account\PasswordController@index')->name('password.index');
	Route::post('password', 'Account\PasswordController@store')->name('password.store');
});

Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest', 'confirmation_token.expired:/']], function() {
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');
});
