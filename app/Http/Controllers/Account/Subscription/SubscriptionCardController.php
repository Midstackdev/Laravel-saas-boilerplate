<?php

namespace App\Http\Controllers\Account\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionCardController extends Controller
{
    public function index()
    {
    	return view('account.subscription.card.index');
    }

    public function store(Request $request) 
    {
    	$request->user()->updateCard($request->token);

    	return redirect()->route('account.index')->withSuccess('Your card has been updated.');
    }
}
