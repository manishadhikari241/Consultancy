<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Course;
use App\Model\CourseDetails;
use App\Model\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends FrontendController
{
    public function courses()
    {
        $course = Course::all();
        $this->data('title', 'Our Courses');
        $this->data('course', $course);
        return view($this->frontendcoursePath . 'courses', $this->data);
    }

    public function courses_single($id)
    {
        $course_name = Course::where('id', '=', $id)->pluck('name');
        $this->data('course', $course_name);
        $begin = CourseDetails::where('course_type', '=', $id)->pluck('begin');
        $this->data('begin', $begin);
        $duration = CourseDetails::where('course_type', '=', $id)->pluck('duration');
        $this->data('duration', $duration);
        $about = CourseDetails::where('course_type', '=', $id)->pluck('about');
        $this->data('about', $about);
        $fee = CourseDetails::where('course_type', '=', $id)->pluck('fee');
        $this->data('fee', $fee);
        $other = CourseDetails::where('course_type', '=', $id)->pluck('other_fee');
        $this->data('other', $other);
        $edu = Link::where('link_type', '=', 1)->get();
        $this->data('edu', $edu);
        $use = Link::where('link_type', '=', 2)->get();
        $this->data('use', $use);
        $related = Course::all();
        $this->data('related', $related);


        return view($this->frontendcoursePath . 'course_single', $this->data);
    }

    public function apply()
    {
        $this->data('title', 'Apply');

        return view($this->frontendcoursePath . 'apply', $this->data);

    }

}
