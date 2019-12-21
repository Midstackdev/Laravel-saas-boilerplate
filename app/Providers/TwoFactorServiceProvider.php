<?php

namespace App\Providers;

use App\TwoFactor\Authy;
use App\TwoFactor\TwoFactor;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class TwoFactorServiceProvider extends ServiceProvider
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
        $this->app->singleton(TwoFactor::class, function () {
            return new Authy(new Client);
        });
    }
}
