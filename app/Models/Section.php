<?php

namespace App\Models;

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
