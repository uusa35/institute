<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->register(\Laracasts\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Fitztrev\QueryTracer\Providers\QueryTracerServiceProvider::class);
        }

        $this->app->bind('Pusher', function () {

            define('configName','broadcasting.connections.pusher.');

            return new \Pusher(
                config(configName . 'key'),
                config(configName . 'secret'),
                config(configName . 'app_id'),
                [
                    'encrypted' => true,
                    'debug' => true
                ]
            );
        });

    }
}
