<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traders extends Model
{
    protected $fillable = ['name','email','mobile','password'];
}
