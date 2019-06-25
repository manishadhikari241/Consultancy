<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $frontendPath = 'Frontend.';
    protected $frontendPagePath = 'null';

    public function __construct()
    {
        $this->frontendPath;
        $this->frontendPagePath = $this->frontendPath . '/' . 'pages.';


    }
}
