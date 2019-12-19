<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'subscription.active']], function() {

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

	/**
	 * subscription
	 */
	Route::group(['prefix' => 'subscription', 'namespace' => 'Account\Subscription', 'as' => 'subscription.'], function() {
		/**
		 * card
		 */
		Route::group(['middleware' => 'subscription.customer'], function() {
			Route::get('/card', 'SubscriptionCardController@index')->name('card.index');
			Route::post('/card', 'SubscriptionCardController@store')->name('card.store');
		});
		/**
		 * resume
		 */
		Route::group(['middleware' => 'subscription.cancelled'], function() {
			Route::get('/resume', 'SubscriptionResumeController@index')->name('resume.index');
			Route::post('/resume', 'SubscriptionResumeController@store')->name('resume.store');
		});
		/**
		 * cancel
		 */
		Route::group(['middleware' => 'subscription.notcancelled'], function() {
			Route::get('/cancel', 'SubscriptionCancelController@index')->name('cancel.index');
			Route::post('/cancel', 'SubscriptionCancelController@store')->name('cancel.store');
		});
		/**
		 * swap
		 */
		Route::group(['middleware' => 'subscription.notcancelled'], function() {
			Route::get('/swap', 'SubscriptionSwapController@index')->name('swap.index');
		});
	});
});

/**
 * Account Activation
 */

Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function() {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@store')->name('resend.store');
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');
});

/**
 * Plan Activation
 */

Route::group(['prefix' => 'plans', 'as' => 'plans.', 'middleware' => ['subscription.inactive']], function() {
    Route::get('/', 'Subscription\PlanController@index')->name('index');
    Route::get('/teams', 'Subscription\PlanTeamController@index')->name('teams.index');
});

/**
 * Subscription Activation
 */

Route::group(['prefix' => 'subscription', 'as' => 'subscription.', 'middleware' => ['auth.register', 'subscription.inactive']], function() {
    Route::get('/', 'Subscription\SubscriptionController@index')->name('index');
    Route::post('/', 'Subscription\SubscriptionController@store')->name('store');
});
