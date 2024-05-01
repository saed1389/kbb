<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function presidentContact()
    {
        $header = 'Başkana ulaş';
        $messages = Contact::where('type', 3)->get();
        return view('admin.contact.contact', compact('messages', 'header'));
    }

    public function newIdea()
    {
        $header = 'Bir fikrim var';
        $messages = Contact::where('type', 2)->get();
        return view('admin.contact.contact', compact('messages', 'header'));
    }

    public function contactUs()
    {
        $header = 'Bize ulaşın';
        $messages = Contact::where('type', 1)->get();
        return view('admin.contact.contact', compact('messages', 'header'));
    }

    public function changeStatus($id, $status)
    {
        Contact::where('id', $id)->update(['status' => $status]);
    }

    public function delete($id)
    {
        Contact::where('id', $id)->delete();
        $notification = array(
            'message' => "Mesaj başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
