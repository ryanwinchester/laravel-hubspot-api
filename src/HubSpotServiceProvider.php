<?php namespace SevenShores\Hubspot;

use Illuminate\Support\ServiceProvider;

class HubspotServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Allow users to publish config to override the defaults.
        $this->publishes([
            __DIR__.'/../config/hubspot.php' => config_path('hubspot.php'),
        ], 'ryanwinchester/laravel-hubspot');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Use the provided config as default.
        $this->mergeConfigFrom(
            __DIR__.'/../config/hubspot.php', 'hubspot'
        );

        // Register 'hubspot' instance container to our HubSpot object
        $this->app->singleton('hubspot', function ($app) {
            $secret = $app['config']->get('hubspot.secret');

            return SevenShores\Hubspot\Factory::create($secret);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('hubspot');
    }
}
