<?php

namespace App\Src;

use App\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use LocaleTrait;
    protected $table = 'contactus';
    public $localeStrings = ['company_name','address'];
    protected $guarded = [''];
}
