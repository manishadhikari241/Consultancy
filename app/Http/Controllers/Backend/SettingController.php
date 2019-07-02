<?php

namespace App\Http\Controllers\Backend;

use App\Model\Configuration;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SettingController extends BackendController
{
    public function setting_page(Request $request)
    {
        if ($request->isMethod('get')) {

            $this->data('title', $this->setTitle('Settings'));
            return view($this->backendPagePath . 'setting', $this->data);
        }
        if ($request->isMethod('post')) {

            $inputs = $request->only(
                'mission', 'about', 'twitter_link', 'googleplus_link', 'instagram_link', 'facebook_link', 'contact_no', 'address', 'website', 'email', 'site_title', 'site_description','chairman','chairman_name'
            );
            if ($request->hasfile('about_image_1')) {
                $this->delete_file('about_image_1');
                $image = $request->file('about_image_1');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/about/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $aboutimage = Configuration::updateorcreate(['configuration_key' => 'about_image_1'], ['configuration_value' => $data]);
            }
            if ($request->hasfile('success_image')) {
                $this->delete_file_success('success_image');
                $image = $request->file('success_image');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/about/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $successimage = Configuration::updateorcreate(['configuration_key' => 'success_image'], ['configuration_value' => $data]);
            }
            if ($request->hasfile('chairman_image')) {
                $this->delete_file('chairman_image');
                $image = $request->file('chairman_image');
                $ext = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/about/');
                $makefile = Image::make($image);
                $save = $makefile->resize(500, '500', function ($ar) {
                    $ar->aspectRatio();
                })->save($destinationPath . '/' . $ext);
                $data = $ext;
                $aboutimage = Configuration::updateorcreate(['configuration_key' => 'chairman_image'], ['configuration_value' => $data]);
            }

            foreach ($inputs as $key => $value) {
                $updateorcreate = Configuration::updateorcreate(['configuration_key' => $key], ['configuration_value' => $value]);
            }
            if ($updateorcreate) {
                return redirect()->back()->with('success', 'Settings Saved');
            }
        }
        return false;
    }

    public function delete_file($id)
    {
        $findData = Configuration::where('configuration_key', '=', $id)->first();
        if (!$findData) {
            return true;
        }
        $fileName = $findData->configuration_value;
        $deletePath = public_path('images/about/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }
    public function delete_file_success($id)
    {
        $findData = Configuration::where('configuration_key', '=', $id)->first();
        if (!$findData) {
            return true;
        }
        $fileName = $findData->configuration_value;
        $deletePath = public_path('images/about/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }
}
