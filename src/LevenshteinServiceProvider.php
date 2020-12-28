<?php

namespace DanmerCC\Levenshtein;

use Illuminate\Support\ServiceProvider;

class LevenshteinServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('leveinshtein.php'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(
            __DIR__.'\/migrates/'
        );
    }


}
