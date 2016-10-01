<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use LocaleTrait;
    public $localeStrings = ['caption'];
    protected $guarded = [''];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

}
