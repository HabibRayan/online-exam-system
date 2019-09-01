<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $fillable = ['user_name','first_name','last_name','miu_id','email','password'];
}
