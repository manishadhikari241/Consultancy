<?php

namespace App\Http\Controllers\Backend;

use App\Model\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends BackendController
{
    public function view_students(Request $request)
    {
        if ($request->isMethod('get')) {

            $this->data('title', $this->setTitle('Students'));
            $data=Student::all();
            $this->data('student',$data);

            return view($this->backendstudentPath . 'student', $this->data);
        }

    }
    public function delete_student($id)
    {
        $find=Student::findorfail($id);
        if($find->delete())
        {
            Session::flash('success','Applicants deleted successfully');
            return redirect()->back();
        }
    }
}
