<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api', 'subscription.active']], function() {
    Route::get('/protected', function() {
        return response('You are in', 200);
    });
});