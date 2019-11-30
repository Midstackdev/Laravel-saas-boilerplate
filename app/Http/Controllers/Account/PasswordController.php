<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\PasswordStoreRequest;
use App\Mail\Account\PasswordUpdated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function index()
    {
    	return view('account.password.index');
    }

    public function store(PasswordStoreRequest $request)
    {
    	$request->user()->update([
    		'password' => bcrypt($request->password)
    	]);

    	Mail::to($request->user())->send(new PasswordUpdated());

    	return redirect()->route('account.index')->withSuccess('Your password has been updated');
    }

}
