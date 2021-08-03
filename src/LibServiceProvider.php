<?php

namespace Hanoivip\PaymentMethodContract;

use Illuminate\Support\ServiceProvider;

class LibServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path(),
        ]);
    }
    
    public function register()
    {
        $this->commands([
        ]);
    }
}
