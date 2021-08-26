<?php

namespace App\Http\Controllers\Backend\Link;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsefulLink;

class UsefulLinkController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = UsefulLink::orderBy('id', 'asc')->get();
        return view('Backend.link.manage_link', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.link.add_link');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $save = new UsefulLink;
        $save->title = $request->title;
        $save->url = $request->url;
        $save->save();
        
        $notification = array('message'=> 'Add Useful Link Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
        
    }
    //edit
    public function edit($id)
    {
        $edit = UsefulLink::find($id);
        return view('Backend.link.edit_link', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $update = UsefulLink::find($id);
        $update->title = $request->title;
        $update->url = $request->url;
        $update->save();
        
        $notification = array('message'=> 'Update Useful Link Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = UsefulLink::find($id);
        $delete->delete();
        $notification = array('message'=> 'Delete Useful Link Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
