<?php

namespace Nihir\CountryStateCity\Console\Commands;

use Illuminate\Console\Command;

class CountryStateCityPublishResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csc:country-state-city-publish-resource';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For publishing the resource of Country, State & Cities';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // File::copyDirectory(__DIR__.'/../../DataProviders', base_path('app/DataProviders'));

        // // Copy Models
        // File::copy(__DIR__.'/../../Models/Country.php', app_path('Models/Country.php'));
        // File::copy(__DIR__.'/../../Models/State.php', app_path('Models/State.php'));
        // File::copy(__DIR__.'/../../Models/City.php', app_path('Models/City.php'));

        // // Copy Seeder
        // File::copy(__DIR__.'/../../database/seeders/CountryStateCityTableSeeder.php', base_path('database/seeders/CountryStateCityTableSeeder.php'));

        // // Copy Migrations
        // File::copy(__DIR__.'/../../database/migrations/2023_12_14_000000_create_country_state_city_table.php', base_path('database/migrations/2023_12_14_000000_create_country_state_city_table.php'));
        // File::copy(__DIR__.'/../../database/migrations/2023_12_18_161918_create_table_country_extra_table.php', base_path('database/migrations/2023_12_18_161918_create_table_country_extra_table.php'));

        // $this->info('Countries, States & Cities resources published successfully.');
        $this->call('vendor:publish', ['--tag' => 'csc-resources']);
        $this->info('Countries, States & Cities resources published successfully.');
    }
}
