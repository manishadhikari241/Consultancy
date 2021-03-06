<?php

namespace App\Http\Controllers\Backend;

use App\Model\Course;
use App\Model\CourseDetails;
use App\Model\Link;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CourseController extends BackendController
{
    public function add_course(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->setTitle('Manage Course'));
            $course = Course::all();
            $this->data('course', $course);
            return view($this->backendcoursePath . 'add_course', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'date' => 'required',
                'description' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/courses/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['name'] = $request->name;
            $data['date'] = $request->date;
            $data['description'] = $request->description;
            $create = Course::create($data);
            if ($create) {
                Session::flash('success', 'Course Added Successfully');
                return redirect()->back();
            }

        }


    }

    public function course_details(Request $request)
    {
        if ($request->isMethod('get')) {
            $course = Course::all();
            $this->data('course', $course);
            $this->data('title', $this->setTitle('Course Details'));

            return view($this->backendcoursePath . 'course_details', $this->data);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'begin' => 'required',
                'duration' => 'required',
                'book' => 'required',
                'about' => 'required'
            ]);
            $data['begin'] = $request->begin;
            $data['duration'] = $request->duration;
            $data['book'] = $request->book;
            $data['fee'] = $request->fee;
            $data['about'] = $request->about;
            $data['course_type'] = $request->course;
            $data['other_fee'] = $request->other_fee;
            $insert = CourseDetails::create($data);
            if ($insert) {
                Session::flash('success', 'Course Details added successfully');
                return redirect()->back();
            }

        }

    }

    public function links(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->setTitle('Links'));

            return view($this->backendcoursePath . 'links', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'reference' => 'required',
            ]);
            $data['title'] = $request->title;
            $data['reference'] = $request->reference;
            $data['link_type'] = $request->link;

            $create = Link::create($data);
            if ($create) {
                Session::flash('success', 'Links added');
                return redirect()->back();
            }
        }
    }

    public function testimonial(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->setTitle('Testimonials'));

            return view($this->backendcoursePath . 'testimonial', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'review' => 'required',
                'rating' => 'required',
                'image' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/testimonials/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['name'] = $request->name;
            $data['review'] = $request->review;
            $data['rating'] = $request->rating;

            $create = Testimonial::create($data);
            if ($create) {
                Session::flash('success', 'Testimonials added');
                return redirect()->back();
            }
        }
    }

    public function delete_course($id)
    {
        $find = Course::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Course Deleted Successfully');
            return redirect()->back();
        }
    }

    public function edit_course(Request $request)
    {
        if ($request->isMethod('get')) {
            $finddata = Course::where('id', '=', $request->id)->first();
            $this->data('course', $finddata);
            $this->data('title', $this->setTitle('Edit Your Course'));
            return view($this->backendcoursePath . 'edit_course', $this->data);
        }
        if ($request->isMethod('post')) {
            $id = $request->id;
            $request->validate([
                'name' => 'required',
                'date' => 'required',
                'description' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/courses/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['name'] = $request->name;
            $data['date'] = $request->date;
            $data['description'] = $request->description;

            $create = Course::findorfail($id);


            if ($create->update($data)) {
                return redirect()->back()->with('success', 'Details Updated');
            }
        }
    }
    public function delete_file($id)
    {
        $findData = Course::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/courses/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }
}
