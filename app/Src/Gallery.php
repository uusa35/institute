<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use App\Scopes\ScopeActive;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use LocaleTrait;
    public $localeStrings = ['description'];
    protected $with = ['images'];

    protected static function boot() {

        parent::boot();

        if(!request()->is('backend/*')) {

            static::addGlobalScope(new ScopeActive());
        }
    }


    public function galleryable()
    {
        return $this->morphTo();
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
