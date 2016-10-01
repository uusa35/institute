<?php

namespace App\Models;

use App\Core\Traits\LocaleTrait;
use App\Scopes\ScopeActive;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use LocaleTrait;
    public $localeStrings = ['caption'];
    protected $guarded = [''];

}
