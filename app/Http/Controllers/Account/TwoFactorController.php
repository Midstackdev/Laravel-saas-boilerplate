<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\TwoFactor\{TwoFactorStoreRequest, TwoFactorVerifyRequest};
use App\Models\Country;
use App\TwoFactor\TwoFactor;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
    	$countries = Country::all();
    	return view('account.twofactor.index', compact('countries'));
    }

    public function store(TwoFactorStoreRequest $request, TwoFactor $twofactor)
    {
    	$user = $request->user();

    	$user->twoFactor()->create([
    		'phone' => $request->phone_number,
    		'dial_code' => $request->dial_code,
    	]);

    	if ($response = $twofactor->register($user)) {
    		$user->twoFactor()->update([
    			'identifier' => $response->user->id
    		]);
    	}

    	return back();
    }

    public function verify(TwoFactorVerifyRequest $request)
    {
    	$request->user()->twoFactor()->update([
    		'verified' => 1
    	]);

    	return back();
    }

    public function destroy(Request $request, TwoFactor $twofactor)
    {
    	$user = $request->user();

    	if ($twofactor->delete($user)) {
			$user->twoFactor()->delete();
    	}

    	return back();
    }
}
