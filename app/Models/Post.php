<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable, LocaleTrait;

    public $localeStrings = ['title', 'body'];
    public $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gallery()
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }

}
