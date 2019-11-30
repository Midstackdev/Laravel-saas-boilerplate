<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ProfileStoreRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('account.profile.index');
    }

    public function store(ProfileStoreRequest $request)
    {
    	$request->user()->update($request->only('name', 'email'));

    	return back()->withSuccess('Account profile updated');
    }
}
