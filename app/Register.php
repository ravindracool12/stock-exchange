<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $primaryKey = 'id';
    protected $tabble ="register";
    protected $fillable = ['firstName','lastName','mobile','password','email','title','startDate','department','location','created_at','updated_at','photo']
}
