<?php

namespace App\Models;

use App\Models\Post;
use App\Core\Traits\LocaleTrait;
use App\Scopes\ScopeActive;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, LocaleTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $guarded = [''];
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'avatar',
        'country',
        'password',
        'mobile',
        'description_ar',
        'description_en',
        'video_link',
        'other_link',
        'membership_id',
        'graduation_year',
        'pdf',
        'gender',
        'type',
        'ibnlp',
        'ibh',
        'active',
        'subscribed',
        'featured',
    ];
    public $localeStrings = ['description'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


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

            static::addGlobalScope(new ScopeActive());

        }

    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function gallery()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

    public function scopeSubscribed($q)
    {
        $q->where('subscribed', 'paid');
    }

    public function scopeTrainer($q)
    {
        $q->where('type', 'trainer');
    }

    public function scopeAssistant($q)
    {
        $q->where('type', 'assistant');
    }

    public function scopeMaster($q)
    {
        $q->where('type', 'master');
    }

    public function scopeIbh($q)
    {
        $q->where('ibh', true);
    }

    public function scopeIbnlp($q)
    {
        $q->where('ibh', true);
    }

    public function scopefeatured($q)
    {
        $q->where('featured', true);
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getTotalusersAttribute()
    {
        return User::all()->count();
    }

    public function getTotalsubscribedAttribute()
    {
        return User::where('subscribed', 1)->count();
    }

    public function getTotalnotactiveAttribute()
    {
        return User::where('active', 0)->count();
    }


}