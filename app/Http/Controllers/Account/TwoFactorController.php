<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
    	$countries = Country::all();
    	return view('account.twofactor.index', compact('countries'));
    }

    public function store()
    {
    	dd('all');
    }
}
