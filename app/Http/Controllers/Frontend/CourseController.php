<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Course;
use App\Model\CourseDetails;
use App\Model\Link;
use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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
        $this->data('id', $id);
        $course_name = Course::where('id', '=', $id)->pluck('name');
        $this->data('course', $course_name);
        $image = Course::where('id', '=', $id)->pluck('image')->first();
        $this->data('image', $image);
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

    public function apply(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data['course_id']=$request->id;
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['contact']=$request->contact;
            $data['address']=$request->address;
            $insert=Student::create($data);
            if ($insert)
            {
                Session::flash('success','You have successfully applied');
                return redirect()->back();
            }
        }
        if ($request->isMethod('get'))
        {
            $id=$request->id;
            $this->data('id',$id);
            $this->data('title', 'Apply');

            return view($this->frontendPagePath . 'apply', $this->data);
        }

        return view($this->frontendcoursePath . 'apply', $this->data);

    }

}
