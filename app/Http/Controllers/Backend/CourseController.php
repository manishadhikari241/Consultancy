<?php

namespace App\Http\Controllers\Backend;

use App\Model\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CourseController extends BackendController
{
    public function add_course(Request $request)
    {
        if ($request->isMethod('post'))
        {
           $request->validate([
               'name'=>'required',
               'date'=>'required',
               'description'=>'required'
           ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/courses/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
           $data['name']=$request->name;
           $data['date']=$request->name;
           $data['description']=$request->description;
           $create=Course::create($data);
           if ($create)
           {
               Session::flash('success','Course Added Successfully');
               return redirect()->back();
           }

        }
        return view($this->backendPagePath.'add_course');
    }
}
