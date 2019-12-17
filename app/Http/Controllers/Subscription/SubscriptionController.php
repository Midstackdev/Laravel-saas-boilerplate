<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscription\SubscriptionStoreRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
    	$plans = Plan::active()->get();

    	return view('subscription.index', compact('plans'));
    }

    public function store(SubscriptionStoreRequest $request) 
    {
    	$subscription = $request->user()->newSubscription('main', $request->plan);

    	if ($request->has('coupon')) {
    		$subscription->withCoupon($request->coupon);
    	}

    	$subscription->create($request->token);

    	return redirect('/')->withSuccess('Thanks for becoming a subscriber.');
    }
}
