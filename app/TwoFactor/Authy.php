<?php

namespace App\TwoFactor;

use App\Models\User;
use GuzzleHttp\Client;
use Exception;

class Authy implements TwoFactor
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function register(User $user)
	{
		try {
			$response = $this->client->request(
				'POST', 'https://api.authy.com/protected/json/users/new?api_key=' . config('services.authy.secret'), [
					'form_params' => [
						'user' => $this->getTwofactorRegistrationDetails($user)
					]
				]
			);
		} catch (Exception $e) {
			return false;
		}

		return json_decode($response->getBody(), false);
	}

	public function validateToken(User $user, $token)
	{
		try {
			$response = $this->client->request(
				'GET', 'https://api.authy.com/protected/json/verify/'. $token . '/'. $user->twoFactor->identifier . '?force=true&api_key=' . config('services.authy.secret')
			);
		} catch (Exception $e) {
			return false;
		}

		$response = json_decode($response->getBody(), false);
		
		return $response->token === 'is valid';
	}

	public function delete(User $user)
	{
		try {
			$response = $this->client->request(
				'POST', 'https://api.authy.com/protected/json/users/delete/' . $user->twoFactor->identifier . '?api_key=' . config('services.authy.secret')
			);
		} catch (Exception $e) {
			return false;
		}

		return true;
	}

	protected function getTwofactorRegistrationDetails(User $user)
	{
		return [
			'email' => $user->email,
			'cellphone' => $user->twoFactor->phone,
			'country_code' => $user->twoFactor->dial_code,
		];
	}
}