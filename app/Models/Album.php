<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use App\Models\Gallery;
use App\Scopes\ScopeHasGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use LocaleTrait;
    public $localeStrings = ['description'];
    protected $guarded = [''];


    /**
     * The "booting" method of the model.
     * applying the scope only in the backend routes.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        if (!request()->is('backend/*')) {

            static::addGlobalScope(new ScopeHasGallery());

        }

    }

    public function gallery()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

    public function getCoverAttribute()
    {
        return $this->gallery->first()->images()->where('cover', true)->first()->image_url;
    }
}
