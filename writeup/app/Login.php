<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'users';
    protected $fillable=['nama','email','password','remember_token','role'];
}
