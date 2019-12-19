<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function users()
    {
    	return $this->belongsToMany(User::class)->withTimestamps();
    }
}
