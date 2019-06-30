<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Contact;
use App\Model\Course;
use App\Model\frontslide;
use App\Model\JapanDetails;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PageController extends FrontendController
{
    public function index()
    {
        $slides = frontslide::where('status', '=', 1)->orderby('created_at', 'desc')->get();
        $this->data('slides', $slides);
         $course=Course::all();
         $this->data('course',$course);
         $review=Testimonial::all();
         $this->data('testimonial',$review);
        return view($this->frontendPagePath . 'index', $this->data);
    }

    public function login()
    {
        return view($this->frontendPagePath . 'login');
    }

    public function about()
    {
        $this->data('title', 'About Us');
        return view($this->frontendPagePath . 'about', $this->data);
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', 'Contact');
            return view($this->frontendPagePath . 'contact', $this->data);
        }
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:30',
                'mail' => 'email|required|min:3|max:100',
                'subject' => 'required|min:3|max:30',
                'message' => 'required|min:3|max:2000',
            ])->validate();

            $insert = Contact::create([
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->mail,
                'message' => $request->message
            ]);
            if ($insert) {
                return redirect()->back()->with('success', 'Your Message has been sent, We will get back to you soon');
            }
        }
        return false;
    }


    public function study_japan(Request $request)
    {
        $details = JapanDetails::all();
        $this->data('details', $details);
        $this->data('title', 'Study In Japan');
        return view($this->frontendPagePath . 'student_visa.study_japan', $this->data);
    }
}
