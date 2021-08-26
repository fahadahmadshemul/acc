<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //index
    public function index()
    {
        $page = Contact::find(1);
        return view('Backend.contact.contact', compact('page'));
    }
    //update
    public function update(Request $request)
    {
        $request->validate([
            'page_name'
        ]);
        $update = Contact::find(1);
        $update->page_name = $request->page_name;
        $update->description = $request->description;
        $update->save();

        $notification = array('message' => 'Update Contact Page Successfull..!', 'alert_type' => 'info');
        return back()->with($notification);
    }
}
