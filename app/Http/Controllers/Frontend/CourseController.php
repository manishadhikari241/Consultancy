<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends FrontendController
{
    public function courses()
    {
        return view($this->frontendPagePath . 'courses');
    }

    public function courses_single()
    {
        return view($this->frontendPagePath . 'course_single');
    }
}
