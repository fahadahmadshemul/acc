<?php

namespace App\Http\Controllers\Backend\Notice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = Notice::orderBy('id', 'desc')->get();
        return view('Backend.notice.manage_notice', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.notice.add_notice');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        $save = new Notice;
        $save->title = $request->title;
        $image = $request->file('image');
        if($image)
        {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/notice/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $save->image = $image_url;
            $save->save();
            
            $notification = array('message'=> 'Add Notice Successfully..!', 'alert-type' => 'success');
            return back()->with($notification);
        }
        
    }
    //edit
    public function edit($id)
    {
        $edit = Notice::find($id);
        return view('Backend.notice.edit_notice', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $update = Notice::find($id);
        $update->title = $request->title;
        $image = $request->file('image');
        if($image)
        {
            unlink($update->image);
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/notice/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $update->image = $image_url;
            $update->save();
            
            $notification = array('message'=> 'Update Notice Successfully..!', 'alert-type' => 'info');
            return back()->with($notification);
        }
        $update->save();
        $notification = array('message'=> 'Update Notice Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = Notice::find($id);
        unlink($delete->image);
        $delete->delete();
        $notification = array('message'=> 'Delete Notice Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
