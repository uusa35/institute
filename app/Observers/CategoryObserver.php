<?php
namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 9/28/16
 * Time: 12:28 PM
 */
class CategoryObserver
{

    public function created()
    {
        $this->clearCache();
    }

    public function updated()
    {
        $this->clearCache();
    }

    public function deleted()
    {
        $this->clearCache();
    }

    public function clearCache(Category $category)
    {
        Cache::forget('menuItems');

        Cache::forever('menuItems', $category->menu()->orderBy('created_at', 'desc')->get());
    }

}