<?php

namespace App\Providers;

use App\Http\Controllers\Frontend\ViewComposers;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        //breadCrumbs
//        view()->composer('meem.backend.partials.breadcrumbs', 'App\Services\ViewComposerService@getBreadCrumbs');

//        menuItems
        view()->composer('frontend.partials.nav', 'App\Core\Services\Views\ViewComposers@getMenuItems');
    }

    /**
     * automatically composer() method will be registered
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
