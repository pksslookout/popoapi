<?php

namespace Modules\Log\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/../Routes/api.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
