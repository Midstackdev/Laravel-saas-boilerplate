<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImpersonateStartRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ImpersonateController extends Controller
{
    public function index()
    {
    	return view('admin.impersonate.index');
    }

    public function start(ImpersonateStartRequest $request)
    {
    	$user = User::where('email', $request->email)->first();

    	session()->put('impersonate', $user->id);

    	return redirect('/')->withSuccess("You are now impersonating {$user->name}");
    }

    public function destroy()
    {
    	session()->forget('impersonate');

    	return redirect('/');
    }
}
