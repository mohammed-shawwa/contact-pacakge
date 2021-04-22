<?php

namespace Shawwa\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    protected $fillable = ['name' , 'email' , 'message'];
}
