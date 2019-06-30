<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Contact;
use App\Model\Course;
use App\Model\frontslide;
use App\Model\Gallery;
use App\Model\JapanDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PageController extends FrontendController
{
    public function index()
    {
        $slides = frontslide::where('status', '=', 1)->orderby('created_at', 'desc')->get();
        $this->data('slides', $slides);
        $course = Course::all();
        $this->data('course', $course);
        return view($this->frontendPagePath . 'index', $this->data);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {

            $this->data('title', 'Login');
            return view($this->frontendPagePath . 'login', $this->data);
        }
        if ($request->isMethod('post')) {

            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);


            $email = $request->email;
            $password = $request->password;

            $remember = isset($request->remember_me) ? true : false;

            if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

                return redirect()->intended(route('dashboard'))->with('success', 'You are logged in');


            } else {
                Session::flash('error', 'Please enter valid credentials');
                return redirect()->back();
            }

        }

        return false;
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

    public function gallery(Request $request)
    {
        $gallery = Gallery::all();
        $this->data('gallery', $gallery);
        $this->data('title', 'Gallery');
        return view($this->frontendPagePath . 'gallery', $this->data);
    }


    public function study_japan(Request $request)
    {
        $details = JapanDetails::all();
        $this->data('details', $details);
        $this->data('title', 'Study In Japan');
        return view($this->frontendPagePath . 'student_visa.study_japan', $this->data);
    }
}
