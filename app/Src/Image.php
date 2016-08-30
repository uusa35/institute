<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use LocaleTrait;
    public $localeStrings = ['caption'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
