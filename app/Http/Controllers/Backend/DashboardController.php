<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends BackendController
{
    public function index()
    {
        $this->data('title', $this->setTitle('Dashboard'));
        return view($this->backendPagePath . 'dashboard',$this->data);
    }
}
