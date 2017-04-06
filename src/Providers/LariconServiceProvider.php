<?php

namespace Vikin\Laricon\Providers;

use Illuminate\Support\ServiceProvider;
use Vikin\Laricon\Application;

class LariconServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot ()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register ()
    {
        $this->app->singleton('laricon', function () {
            return new Application();
        });
    }

}