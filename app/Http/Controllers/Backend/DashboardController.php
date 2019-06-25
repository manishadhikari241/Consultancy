<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends BackendController
{
    public function index()
    {
        return view($this->backendPagePath . 'dashboard');
    }
}
