<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanTeamController extends Controller
{
    public function index()
    {
    	$plans = Plan::active()->forTeams()->get();

    	return view('subscription.plans.teams.index', compact('plans'));
    }
}
