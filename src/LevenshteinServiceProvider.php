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
        //
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
