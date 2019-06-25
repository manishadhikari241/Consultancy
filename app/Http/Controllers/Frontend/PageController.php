<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends FrontendController
{
    public function index()
    {
        return view($this->frontendPagePath . 'index');
    }

    public function login()
    {
        return view($this->frontendPagePath . 'login');
    }

    public function about()
    {
        return view($this->frontendPagePath . 'about');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->frontendPagePath . 'contact');
        }
        return false;
    }
}
