<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
    //

    public $table = 'prayer_request';

    public $fillable = ['name','email','message'];
}
