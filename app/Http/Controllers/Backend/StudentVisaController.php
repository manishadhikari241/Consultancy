<?php

namespace App\Http\Controllers\Backend;

use App\Model\JapanDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentVisaController extends BackendController
{
    public function study_japan_back(Request $request)
    {
        if ($request->isMethod('get')) {
            $detail = JapanDetails::all();
            $this->data('details', $detail);
            $this->data('title', $this->setTitle('Study in Japan'));
            return view($this->backendPagePath . 'student_visa.study_in_japan', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'points' => 'required|min:3|max:500',
                'description' => 'required|min:3|max:5000'
            ]);
            $insert = JapanDetails::create([
                'points' => $request->points,
                'answer' => $request->description
            ]);
            if ($insert) {
                return redirect()->back()->with('success', 'Successfully Inserted your data');
            }
        }
        return false;
    }

    public function study_japan_delete(Request $request)
    {
        $id = $request->id;
        $finddata = JapanDetails::findorfail($id)->delete();
        if ($finddata) {
            return redirect()->back()->with('success', 'Details Deleted');
        }
    }

    public function study_japan_edit(Request $request)
    {
        if ($request->isMethod('get')) {
            $finddata = JapanDetails::where('id', '=', $request->id)->first();
            $this->data('details', $finddata);
            $this->data('title', $this->setTitle('Edit Your Details'));
            return view($this->backendPagePath . 'student_visa.study_in_japan_edit', $this->data);
        }
        if ($request->isMethod('post')) {
            $update = JapanDetails::where('id', '=', $request->id)->update([
                'points' => $request->points,
                'answer' => $request->description
            ]);

            if ($update) {
                return redirect()->back()->with('success', 'Details Updated');
            }
        }
        return false;

    }
}
