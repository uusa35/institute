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

    public function created($model)
    {
        $this->clearCache($model);
    }

    public function updated($model)
    {
        $this->clearCache($model);
    }

    public function deleted($model)
    {
        $this->clearCache($model);
    }

    public function clearCache($model)
    {
        Cache::forget('menuItems');

        Cache::forever('menuItems', $model->menu()->orderBy('created_at', 'desc')->get());
    }

}