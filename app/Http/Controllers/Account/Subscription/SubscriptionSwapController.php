<?php

namespace App\Http\Controllers\Account\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionSwapController extends Controller
{
    public function index()
    {
    	return view('account.subscription.swap.index');
    }
}
