<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    protected $fillable=['begin','duration','book','fee','about','course_type','other_fee'];
}
