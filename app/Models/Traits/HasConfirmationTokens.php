<?php

namespace App\Models\Traits;

use App\Models\ConfirmationToken;
use Illuminate\Support\Str;

trait HasConfirmationTokens
{
	public function generateConfirmationToken()
	{
		$this->confirmationToken()->create([
			'token' => $token = Str::random(200),
			'expires_at' => $this->getConfirmationTokenExpiry()
		]);

		return $token;
	}

	protected function getConfirmationTokenExpiry()
	{
		return $this->freshTimestamp()->addMinutes(10);
	}

	public function confirmationToken()
	{
		return $this->hasOne(ConfirmationToken::class);
	}
}