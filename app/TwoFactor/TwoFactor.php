<?php

namespace App\TwoFactor;

use App\Models\User;

interface TwoFactor
{
	public function register(User $user);

	public function validateToken(User $user, $token);

	public function delete(User $user);
}