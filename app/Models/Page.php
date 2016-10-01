<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use App\Scopes\ScopeHasSections;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use LocaleTrait, SoftDeletes;
    public $localeStrings = ['title'];
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

        if (!request()->is('backend')) {

            static::addGlobalScope(new ScopeHasSections());

        }

    }

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
