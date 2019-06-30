<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','email','contact','address','course_id'];

    public function courses()
    {
        return $this->belongsTo('App\Model\Course','course_id');
    }
}
