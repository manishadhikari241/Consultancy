<?php

namespace App\Http\Controllers\Backend;

use App\Model\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BackendController
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {

            $this->data('title', $this->setTitle('Dashboard'));
            return view($this->backendPagePath . 'dashboard', $this->data);
        }
        if ($request->isMethod('post')) {
            $inputs = $request->only('heading_1', 'description_1', 'heading_2', 'description_2', 'heading_3', 'description_3', 'heading_4', 'description_4');

            foreach ($inputs as $key => $value) {
                $updateorcreate = Advertisement::updateorcreate(['section' => $key], ['description' => $value]);

            }
        }
        if ($updateorcreate) {
            return redirect()->back()->with('success', 'Advertisement Updated');
        }
        return false;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('success', 'Logged out');
    }
}
