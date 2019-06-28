<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $frontendPath = 'Frontend.';
    protected $frontendPagePath = 'null';
    protected $frontendcoursePath = 'null';

    public function __construct()
    {
        $this->frontendPath;
        $this->frontendPagePath = $this->frontendPath . '/' . 'pages.';
        $this->frontendcoursePath = $this->frontendPath . '/' . 'pages.'. '/' . 'course.';


    }
}
