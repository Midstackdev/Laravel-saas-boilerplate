<?php

namespace App\Http\Middleware\Subscription;

use Closure;

class RedirectIfPiggybackSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->hasPiggybacksubscription()) {
            return redirect()->route('account.index');
        }
        
        return $next($request);
    }
}
