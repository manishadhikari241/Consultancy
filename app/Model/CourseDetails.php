<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    protected $fillable=['course_time','duration','fee','about','features','apply','name','designation','image','course_id'];
}
