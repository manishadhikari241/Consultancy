<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Foundation\Auth\User as Auth;

class Admin extends Auth
{
    protected $fillable = ['name', 'email', 'phone', 'password', 'status'];
}
