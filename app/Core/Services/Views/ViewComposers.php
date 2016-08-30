<?php

namespace App\Core\Services\Views;

use App\Src\Category;
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
        $menuItems = $this->category->menu()->get();

//        dd($menuItems);

        return $view->with(compact('menuItems'));
    }
}
