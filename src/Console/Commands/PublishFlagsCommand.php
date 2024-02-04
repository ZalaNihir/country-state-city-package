<?php

namespace Nihir\CountryStateCity\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishFlagsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csc:publish-flags';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the Countries Flags folder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sourceDirectory = __DIR__.'/../../flags';

        // Destination directory in the public folder
        $destinationDirectory = public_path('flags');

        // Recursively copy the flags directory
        File::copyDirectory($sourceDirectory, $destinationDirectory);

        $this->info('Flags published successfully in your laravel public path.');
    }
}
