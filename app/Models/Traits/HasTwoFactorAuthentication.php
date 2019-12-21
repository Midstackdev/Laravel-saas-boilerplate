<?php

namespace App\Models\Traits;

use App\Models\TwoFactor;

trait HasTwoFactorAuthentication 
{
	public function twoFactor()
	{
		return $this->hasOne(TwoFactor::class);
	}

	public function twoFactorPendingVerification()
	{
		if (!$this->twoFactor) {
			return false;
		}

		return !$this->twoFactor->isVerified();
	}

	public function twoFactorEnabled()
	{
		return (bool) optional($this->twoFactor)->isVerified();
	}
}