<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('subscribed', function () {
            return "<?php if(auth()->user()->hasSubscription()): ?>";
        });

        Blade::directive('endsubscribed', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('subscriptionnotcancelled', function () {
            return "<?php if(auth()->user()->hasNotCancelled()): ?>";
        });

        Blade::directive('endsubscriptionnotcancelled', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('subscriptioncancelled', function () {
            return "<?php if(auth()->user()->hasCancelled()): ?>";
        });

        Blade::directive('endsubscriptioncancelled', function () {
            return "<?php endif; ?>";
        });
    }
}
