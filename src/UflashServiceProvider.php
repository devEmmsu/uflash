<?php

namespace Hugueso\Uflash;

use Illuminate\Support\ServiceProvider;

class UflashServiceProvider extends ServiceProvider
{   

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {   
        $this->app->bind(
            \Hugueso\Uflash\UflashSessionStore::class,
            \Hugueso\Uflash\LaravelSessionStore::class
        );
        
        $this->app->singleton('uflash', function () {
            return $this->app->make(\Hugueso\Uflash\UflashNotifier::class);
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'uflash');

        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/uflash')
        ]);
    }
}
