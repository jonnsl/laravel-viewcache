<?php

namespace Jonnsl\ViewCache;

use Illuminate\Support\ServiceProvider;

class ViewCacheServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.viewcache', function () {
            return new Commands\ViewCacheCommand($this->app['files']);
        });
        $this->commands(['command.viewcache']);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.viewcache'];
    }
}
