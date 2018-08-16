<?php

namespace mody\calc;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('mody\calc\CalcController');
        $this->loadViewsFrom(__DIR__.'/views', 'calc');
    }
}
