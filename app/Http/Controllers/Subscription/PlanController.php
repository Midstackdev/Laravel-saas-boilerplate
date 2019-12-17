<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
    	$plans = Plan::active()->forUsers()->get();

    	return view('subscription.plans.index', compact('plans'));
    }
}
