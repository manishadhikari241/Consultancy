<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath = 'backend.';
    protected $backendPagePath = 'null';
    protected $backendcoursePath = 'null';


    public function __construct()
    {
        $this->backendPath;
        $this->backendPagePath = $this->backendPath . '/' . 'pages.';
        $this->backendcoursePath = $this->backendPath . '/' . 'pages.'. '/' . 'course.';


    }
}
