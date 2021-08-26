<?php

namespace App\Http\Controllers\Backend\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SLider;

class SliderController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = SLider::orderBy('id', 'desc')->get();
        return view('Backend.slider.manage_slider', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.slider.add_slider');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'image' => 'required',
        ]);

        $save = new SLider;
        $save->title = $request->title;
        $save->short_desc = $request->short_desc;
        $save->long_desc = $request->long_desc;
        $image = $request->file('image');
        if($image)
        {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/slider/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $save->image = $image_url;
            $save->save();
            
            $notification = array('message'=> 'Add Slider Successfully..!', 'alert-type' => 'success');
            return back()->with($notification);
        }
        
    }
    //edit
    public function edit($id)
    {
        $edit = SLider::find($id);
        return view('Backend.slider.edit_slider', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
        ]);

        $update = SLider::find($id);
        $update->title = $request->title;
        $update->short_desc = $request->short_desc;
        $update->long_desc = $request->long_desc;
        $image = $request->file('image');
        if($image)
        {
            if($update->image != NULL){
                unlink($update->image);
            }
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/slider/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $update->image = $image_url;
            $update->save();
            
            $notification = array('message'=> 'Update Slider Successfully..!', 'alert-type' => 'info');
            return back()->with($notification);
        }
        $update->save();
        $notification = array('message'=> 'Update Slider Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = Slider::find($id);
        unlink($delete->image);
        $delete->delete();
        $notification = array('message'=> 'Delete Slider Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
