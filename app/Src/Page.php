<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use LocaleTrait, SoftDeletes;
    public $localeStrings = ['title'];
    protected $guarded = [''];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function gallery()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
