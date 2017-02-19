<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use App\Scopes\ScopeActive;
use App\Scopes\ScopeGalleryHasImages;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use LocaleTrait;
    public $localeStrings = ['description'];
    protected $with = ['images'];
    protected $table = 'galleries';
    protected $guarded = [''];

    protected static function boot() {

        parent::boot();

        if(!request()->is('backend/*')) {

            static::addGlobalScope(new ScopeActive());
            static::addGlobalScope(new ScopeGalleryHasImages());
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
