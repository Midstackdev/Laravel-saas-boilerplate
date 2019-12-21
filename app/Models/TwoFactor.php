<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwoFactor extends Model
{
    protected $table = 'two_factor';

    protected $fillable = [
    	'phone', 'dial_code', 'identifier', 'verified'
    ];

    public static function boot()
    {
    	parent::boot();

    	static::creating(function($twoFactor) {
    		optional($twoFactor->user->twoFactor)->delete();
    	});
    }

    public function isVerified()
    {
    	return $this->verified;
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
