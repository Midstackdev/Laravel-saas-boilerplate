<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfirmationToken extends Model
{
    public $timestamps = false;

    protected $dates = [
    	'expires_at'
    ];

    protected $fillable = [
    	'expires_at',
    	'token',
    ];

    public static function boot()
    {
    	parent::boot();
    	static::creating(function ($token) {
    		optional($token->user->confirmationToken)->delete();
    	});
    }

    public function getRouteKeyName()
    {
    	return 'token';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function hasExpired()
    {
    	return $this->freshTimestamp()->gt($this->expires_at);
    }
}
