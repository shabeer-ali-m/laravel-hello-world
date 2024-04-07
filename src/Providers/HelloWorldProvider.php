<?php

namespace SmartPhp\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

class HelloWorldProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'helloworld');
    }
}
