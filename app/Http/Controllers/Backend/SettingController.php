<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends BackendController
{
    public function setting_page(Request $request)
    {
        $this->data('title', $this->setTitle('Settings'));
        return view($this->backendPagePath . 'setting', $this->data);
    }
}
