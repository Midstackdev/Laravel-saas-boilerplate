<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ConfirmationToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
	protected $redirectTo = '/dashboard';

    public function activate(ConfirmationToken $token, Request $request)
    {
    	$token->user->update([
    		'activated' => 1
    	]);

    	$token->delete();

    	Auth::loginUsingId($token->user->id);

    	return redirect()->intended($this->redirectPath())->withSuccess('Your account is activated and you are signed in');
    }

    protected function redirectPath()
    {
    	return $this->redirectTo;
    }
}
