<?php

namespace App\Models\Traits;

use App\Models\Role;

trait HasRoles
{
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

	public function hasRole($role)
	{
		return $this->roles->contains('name', $role);
	}
}