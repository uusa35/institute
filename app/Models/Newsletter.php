<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Newsletter extends Model
{
    use Notifiable;
    protected $table = 'newsletter';
    protected $guarded = [''];


}
