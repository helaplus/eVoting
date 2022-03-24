<?php

namespace Helaplus\Evoting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class EvotingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ussd');

        // Register the service the package provides.
        $this->app->singleton('Evoting', function ($app) {
            return new Evoting($app);
        });
    }

    public function boot()
    {
        //publish the config file
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('ussd.php'),
            ], 'config');

        }

        if ($this->app->runningInConsole()) {
            // Export the migration
                $this->publishes([
                    __DIR__ . '/../database/seeders/NomineeSeeder.php' => database_path('seeders/NomineeSeeder.php'),
                    __DIR__ . '/../database/seeders/ElectionSeeder.php' => database_path('seeders/ElectionSeeder.php'),
                    __DIR__ . '/../database/seeders/CategoriesSeeder.php' => database_path('seeders/CategoriesSeeder.php'),
                    __DIR__ . '/../database/seeders/NomineeCategoriesSeeder.php' => database_path('seeders/NomineeCategoriesSeeder.php'),
                    // you can add any number of migrations here
                ], 'seeders');
        }
        //Register a command if we are using the application vis CLI
//        if($this->app->runningInConsole()){
//            $this->commands([
//                    InstallUssdPackage::class,
//                ]);
//        }
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('ussd.prefix')
        ];
    }
}