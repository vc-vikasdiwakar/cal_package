<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Devdojo\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
        // include __DIR__.'/routes.php';
        $this->loadRoutesFrom(__DIR__.'/routes.php');


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
         // include __DIR__.'/routes.php';
         $this->loadRoutesFrom(__DIR__.'/routes.php');
         // $this->loadMigrationsFrom(__DIR__.'/migrations');
         $this->loadViewsFrom(__DIR__.'/views', 'calculator');
         $this->publishes([
             __DIR__.'/views' => base_path('resources/views/wisdmlabs/calculator'),
         ]);
    }
}
