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
}
