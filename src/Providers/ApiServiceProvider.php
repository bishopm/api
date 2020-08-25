<?php

namespace Bishopm\Api\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Contracts\Events\Dispatcher;

class ApiServiceProvider extends ServiceProvider
{

    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(255);
        require __DIR__.'/../Http/api.routes.php';
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
