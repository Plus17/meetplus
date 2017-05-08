<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DebugbarServiceProvider::class);
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
