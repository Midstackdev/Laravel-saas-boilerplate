<?php

namespace App\Models\Traits;

trait HasSubscriptions 
{
	public function hasTeamSubscription()
	{
		return $this->plan->isForTeams();
	}

	public function doesNotHaveTeamSubscription()
	{
		return !$this->hasTeamSubscription();
	}

	public function hasSubscription()
	{
		return $this->subscribed('main');
	}

	public function doesNotHaveSubscription()
	{
		return !$this->hasSubscription();
	}

	public function hasCancelled()
	{
		return optional($this->subscription('main'))->cancelled();
	}

	public function hasNotCancelled()
	{
		return !$this->hasCancelled();
	}

	public function isCustomer()
	{
		return $this->hasStripeId();
	}
}