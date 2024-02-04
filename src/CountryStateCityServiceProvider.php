<?php

namespace Nihir\CountryStateCity;

use Nihir\CountryStateCity\Console\Commands\CountryStateCityPublishResource;
use Nihir\CountryStateCity\Console\Commands\PublishFlagsCommand;
use Illuminate\Support\ServiceProvider;

class CountryStateCityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // For Publishing Resources
        $this->publishes([
            __DIR__.'/DataProviders' => base_path('app/DataProviders'),
            __DIR__.'/Models' => app_path('Models'),
            __DIR__.'/database/seeders' => base_path('database/seeders'),
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'csc-resources');
    
        // Optionally, you can tag the migrations for easy rollback
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'csc-migrations');
        
        
    }

    public function register()
    {
        $this->commands([
            CountryStateCityPublishResource::class,
            PublishFlagsCommand::class,
        ]);        
    }
}