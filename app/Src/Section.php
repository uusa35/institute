<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use LocaleTrait;
    public $localeStrings = ['header','content'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
