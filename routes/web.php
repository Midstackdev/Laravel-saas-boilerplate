<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'subscription.active']], function() {

	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login/twofactor', 'Auth\TwoFactorLoginController@index')->name('login.twofactor.index');
    Route::post('/login/twofactor', 'Auth\TwoFactorLoginController@verify')->name('login.twofactor.verify');
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
	 * Deactivate
	 */
	Route::get('deactivate', 'Account\DeactivateController@index')->name('deactivate.index');
	Route::post('deactivate', 'Account\DeactivateController@store')->name('deactivate.store');

	/**
	 * Two factor
	 */
	Route::get('twofactor', 'Account\TwoFactorController@index')->name('twofactor.index');
	Route::post('twofactor', 'Account\TwoFactorController@store')->name('twofactor.store');
	Route::post('twofactor/verify', 'Account\TwoFactorController@verify')->name('twofactor.verify');
	Route::delete('twofactor', 'Account\TwoFactorController@destroy')->name('twofactor.destroy');

	/**
	 * subscription
	 */
	Route::group(['prefix' => 'subscription', 'namespace' => 'Account\Subscription', 'as' => 'subscription.', 'middleware' => ['subscription.owner']], function() {
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
			Route::post('/swap', 'SubscriptionSwapController@store')->name('swap.store');
		});

		/**
		 * team
		 */
		Route::group(['middleware' => 'subscription.team'], function() {
			Route::get('/team', 'SubscriptionTeamController@index')->name('team.index');
			Route::patch('/team', 'SubscriptionTeamController@update')->name('team.update');

			Route::post('/team/member', 'SubscriptionTeamMemeberController@store')->name('team.member.store');
			Route::delete('/team/member/{user}', 'SubscriptionTeamMemeberController@destroy')->name('team.member.destroy');
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
