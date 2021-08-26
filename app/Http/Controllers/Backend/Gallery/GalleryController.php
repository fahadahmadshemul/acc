<?php

namespace App\Http\Controllers\Backend\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = Gallery::orderBy('id', 'desc')->get();
        return view('Backend.gallery.manage_gallery', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.gallery.add_gallery');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $save = new Gallery;
        $save->title = $request->title;
        $image = $request->file('content');
        if($image)
        {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/gallery/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $save->content = $image_url;
            $save->save();
            
            $notification = array('message'=> 'Add Gallery Successfully..!', 'alert-type' => 'success');
            return back()->with($notification);
        }
        
    }
    //edit
    public function edit($id)
    {
        $edit = Gallery::find($id);
        return view('Backend.gallery.edit_gallery', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $update = Gallery::find($id);
        $update->title = $request->title;
        $image = $request->file('content');
        if($image)
        {
            unlink($update->content);
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/gallery/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $update->content = $image_url;
            $update->save();
            
            $notification = array('message'=> 'Update Gallery Successfully..!', 'alert-type' => 'success');
            return back()->with($notification);
        }
        $update->save();
        $notification = array('message'=> 'Update Gallery Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = Gallery::find($id);
        unlink($delete->content);
        $delete->delete();
        $notification = array('message'=> 'Delete Gallery Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
