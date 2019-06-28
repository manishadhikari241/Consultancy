<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends FrontendController
{
    public function courses()
    {
        $course=Course::all();
        $this->data('course',$course);
        return view($this->frontendcoursePath.'courses',$this->data);
    }

    public function courses_single()
    {
        return view($this->frontendcoursePath . 'course_single');
    }
}
