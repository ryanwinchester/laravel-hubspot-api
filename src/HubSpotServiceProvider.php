<?php namespace Fungku\Hubspot;

use Fungku\HubSpot\HubSpotService;
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
        $this->publishes([
            __DIR__.'/../config/hubspot.php' => config_path('hubspot.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'hubspot' instance container to our HubSpot object
        $this->app->singleton('hubspot', function ($app) {
            $apiKey = $app['config']->get('hubspot.key');

            return HubSpotService::make($apiKey);
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
