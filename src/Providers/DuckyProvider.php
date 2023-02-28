<?php

namespace Trado006\Ducky\Providers;

use Illuminate\Support\ServiceProvider;

class DuckyProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'ducky');
    }
}
