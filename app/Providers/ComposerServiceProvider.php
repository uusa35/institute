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
        view()->composer(['frontend.partials.footer', 'frontend.pages.contactus','backend.partials.nav'],
            'App\Core\Services\Views\ViewComposers@getContactusInfo');
        view()->composer('backend.partials._page_bar', 'App\Core\Services\Views\ViewComposers@getBreadCrumbs');
        view()->composer(['backend.modules.page.create', 'backend.modules.category.create',
            'backend.modules.category.edit','backend.modules.page.edit','backend.modules.contactus.edit'],
            'App\Core\Services\Views\ViewComposers@removeCache');
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
