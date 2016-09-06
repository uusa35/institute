<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use LocaleTrait;
    public $localeStrings = ['header', 'content'];
    protected $guarded = [''];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
