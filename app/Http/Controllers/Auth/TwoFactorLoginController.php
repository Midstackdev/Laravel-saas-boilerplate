<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\TwoFactor\TwoFactorVerifyRequest;
use Illuminate\Http\Request;
use Auth;

class TwoFactorLoginController extends Controller
{
	protected $redirectTo = '/dashboard';

    public function index()
    {
    	return view('auth.twofactor.index');
    }

    public function verify(TwoFactorVerifyRequest $request)
    {
    	Auth::loginUsingId($request->user()->id, session('twofactor')->remember);

    	session()->forget('twofactor');

    	return redirect()->intended($this->redirectPath());
    }

    protected function redirectPath()
    {
    	return $this->redirectTo;
    }
}
