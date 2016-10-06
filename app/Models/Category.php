<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use LocaleTrait;
    public $localeStrings = ['name'];
    protected $guarded = [''];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function menu($q)
    {
        return $q->parents()->where('menu', 1);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function scopeParents($q)
    {
        return $q->where('parent_id', 0);
    }

    public function scopeMenus($q)
    {
        /*
         * fetch all categories that marked as menu -> with all pages related to such category only if they have sections
         * */
        return $q->parents()->whereHas('pages', function ($q) {
            $q->with('pages');
        })->where('menu', true);
    }

}
