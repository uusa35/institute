<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use LocaleTrait;
    public $localeStrings = ['name'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function scopeParents($q)
    {
        return $q->where('parent_id', 0);
    }

    public function scopeMenu($q)
    {
        return $q->parents()->with('pages')->where('menu', true);
    }

}
