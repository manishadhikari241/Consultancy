<?php

namespace App\Http\Controllers\Backend;

use App\Mail\Contact_reply;
use App\Model\Configuration;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends BackendController
{
    public function manage_contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->setTitle('Manage Contact Page'));
            return view($this->backendContactPath . 'manage_contact_page', $this->data);
        }
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'short_description' => 'max:1000',
                'long_description' => 'max:1000'
            ])->validate();
            $inputs = $request->only('short_description', 'long_description');

            foreach ($inputs as $key => $value) {
                $updateorcreate = Configuration::updateorcreate(['configuration_key' => $key], ['configuration_value' => $value]);
            }
            if ($updateorcreate) {
                return redirect()->back()->with('success', 'Contact page Information Saved');
            }
        }
        return false;
    }

    public function contact_message(Request $request)
    {
        if ($request->isMethod('get')) {
            $contact = Contact::all();
            $this->data('contact', $contact);
            $this->data('title', $this->setTitle('Messages'));
            return view($this->backendContactPath . 'contact_page_message', $this->data);
        }
    }

    public function delete_contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $contact = Contact::findorfail($request->id);
            if ($contact->delete()) {
                return redirect()->back()->with('success', 'Contact Message Successfully Deleted');
            }

        }
    }

    public function reply(Request $request)
    {
        $id = $request->id;
        $contact = Contact::where('id', '=', $id)->get();
        $this->data('contact', $contact);
        return view($this->backendContactPath . 'reply', $this->data);
    }

    public function reply_mail(Request $request)
    {
        $reply = Mail::send(new Contact_reply());
            return redirect()->back()->with('success', 'Reply Sent');

    }

}
