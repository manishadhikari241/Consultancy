<?php

namespace App\Http\Controllers\Backend;

use App\Model\frontslide;
use App\Model\Gallery;
use App\Model\ImageSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class SlideController extends BackendController
{
    public function slide_front(Request $request)
    {
        if ($request->isMethod('get')) {
            $slides = frontslide::orderby('created_at', 'desc')->get();
            $this->data('slides', $slides);
            $this->data('title', $this->setTitle('FrontPage-Slides'));
            return view($this->backendPagePath . 'slides.front_slides', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'heading' => 'required|min:3|max:999',
                'short_description' => 'required|min:3|max:1500'
            ]);
            $insert = frontslide::create([
                'header' => $request->heading,
                'short_description' => $request->short_description,
                'status' => $request->status
            ]);
            if ($insert) {
                return redirect()->back()->with('success', 'Slides inserted');
            }
        }
        return false;
    }

    public function slide_status(Request $request)
    {
        $finddata = frontslide::findorfail($request->status);
        if (isset($_POST['active'])) {
            $finddata->status = 0;
        }
        if (isset($_POST['inactive'])) {
            $finddata->status = 1;
        }

        $update = $finddata->update();

        if ($update) {
            return redirect()->back()->with('success', 'Status Updated');
        }
        return false;
    }

    public function slide_delete(Request $request)
    {
        $id = $request->id;
        $slide = frontslide::findorfail($id);
        $delete = $slide->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Slide Deleted');
        }
        return true;
    }

    public function slide_front_edit(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->id;
            $slide = frontslide::where('id', '=', $id)->first();
            $this->data('slide', $slide);
            $this->data('title', $this->setTitle('Edit-slide'));
            return view($this->backendPagePath . 'slides.front_slide_edit', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'heading' => 'required|min:3|max:999',
                'short_description' => 'required|min:3|max:1500'
            ]);
            $update = frontslide::where('id', '=', $request->id)->update([
                'header' => $request->heading,
                'short_description' => $request->short_description,
                'status' => $request->status
            ]);
            if ($update) {
                return redirect()->route('slide-front')->with('success', 'Slides updated');
            }
        }
    }

    public function image_sections(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->setTitle('Image Sections'));
            return view($this->backendPagePath . 'slides.image_sections', $this->data);
        }
        if ($request->isMethod('post')) {
            if ($request->hasfile('section_1')) {
                $this->delete_image('section_1');
                $image = $request->file('section_1');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/frontpage/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $successimage = ImageSection::updateorcreate(['section' => 'section_1'], ['image' => $data]);
            }
            if ($request->hasfile('section_2')) {
                $this->delete_image('section_2');
                $image = $request->file('section_2');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/frontpage/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $successimage = ImageSection::updateorcreate(['section' => 'section_2'], ['image' => $data]);
            }
            if ($request->hasfile('section_3')) {
                $this->delete_image('section_3');
                $image = $request->file('section_3');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/frontpage/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $successimage = ImageSection::updateorcreate(['section' => 'section_3'], ['image' => $data]);
            }
            if ($request->hasfile('section_4')) {
                $this->delete_image('section_4');
                $image = $request->file('section_4');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/frontpage/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $successimage = ImageSection::updateorcreate(['section' => 'section_4'], ['image' => $data]);
            }


            return redirect()->back()->with('success', 'Image Sections Updated');
        }
        return false;
    }

    public function delete_image($id)
    {
        $findData = ImageSection::where('section', '=', $id)->first();
        if (!$findData) {
            return true;
        }
        $fileName = $findData->image;
        $deletePath = public_path('images/frontpage/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function gallery(Request $request)
    {
        if ($request->isMethod('get')) {
            $image = Gallery::all();

            $this->data('images', $image);
            $this->data('title', $this->setTitle('Gallery'));
            return view($this->backendPagePath . 'gallery', $this->data);
        }
        if ($request->isMethod('post')) {
            $count = count($request->image_upload);

            if ($request->hasfile('image_upload')) {

                foreach ($request->file('image_upload') as $image) {
                    $name = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path() . '/images/gallery/', $name);
                    $data[] = $name;
                }
            }
            foreach ($data as $value) {
                $save['gallery'] = $value;
                $create = Gallery::create($save);
            }
//            $form = new Gallery();
//            $form->filename = json_encode($data);
//
//
//            $form->save();


            return redirect()->back()->with('success', 'Images Uploaded');


        }
        return false;
    }

    public function gallery_delete(Request $request)
    {
        $id = $request->id;
        $this->gallery_file($id);
        $finddata = Gallery::findorfail($id)->delete();
        if ($finddata) {
            return redirect()->back()->with('success', 'Images Deleted');
        }
        return true;
    }

    public function gallery_file($id)
    {
        $findData = Gallery::where('id', '=', $id)->first();
        $fileName = $findData->gallery;
        $deletePath = public_path('images/gallery/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

}
