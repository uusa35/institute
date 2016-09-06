<?php

namespace App\Core\Services\Views;

use App\Src\Category;
use App\Src\Contactus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class ViewComposers
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getMenuItems(View $view)
    {

        if (!Cache::has('menuItems')) {

            Cache::forever('menuItems', $this->category->menu()->orderBy('created_at', 'desc')->get());

        }

        $menuItems = Cache::get('menuItems');

        $contactusInfo = $this->contactusInfo();

        return $view->with(compact('menuItems', 'contactusInfo'));
    }

    public function getContactusInfo(View $view)
    {
        $contactusInfo = $this->contactusInfo();

        return $view->with(compact('contactusInfo'));
    }


    public function getBreadCrumbs(View $view)
    {
        $link = '';

        $arrayFilter = ['index', 'create', 'update', 'store', 'destroy', 'delete', 'meta', 'attribute', 'edit'];

        $name = Route::currentRouteName();

        $routes = explode('.', $name);

        $routes = array_filter($routes, function ($item) use ($arrayFilter) {

            if (!in_array($item, $arrayFilter, true)) {

                return $item;

            }

        });

        $view->with('breadCrumbs', $routes);
    }

    public function contactusInfo()
    {

        if (!Cache::has('contactusInfo')) {

            $contactusInfo = Contactus::first();

            Cache::forever('contactusInfo', $contactusInfo);
        }

        return Cache::get('contactusInfo');
    }

    public function removeCache(View $view)
    {
        Cache::flush();

        return $view;
    }
}

