<?php

namespace App\Http\Controllers\Backend\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Archive;
use Session;

class PostController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = Post::orderBy('id', 'desc')->get();
        return view('Backend.post.manage_post', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.post.add_post');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        //archive
        $date = date('M-Y');
        $Archive = Archive::where('archive', $date)->first();
        if($Archive)
        {
            
        }else{
            $Archive = new Archive;
            $Archive->archive = $date;
            $Archive->save();
        }
        //post
        $save = new Post;
        $save->title = $request->title;
        $save->archive = $date;
        $image = $request->file('image');
        $image_name = md5(rand(1000, 10000));
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'public/post/';
        $image_url = $upload_path.$image_full_name;
        $image->move($upload_path, $image_full_name);
        $save->image = $image_url;
        $save->save();
        
        $notification = array('message'=> 'Add Post Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
    }
    //edit
    public function edit($id)
    {
        $edit = Post::find($id);
        return view('Backend.post.edit_post', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required'
        ]);
        //post
        $update = Post::find($id);
        $update->title = $request->title;
        $image = $request->file('image');
        if($image)
        {
            unlink($update->image);

            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/post/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path, $image_full_name);
            $update->image = $image_url;
            $update->save();
            
            $notification = array('message'=> 'Update Post Successfully..!', 'alert-type' => 'info');
            return back()->with($notification);
        }
    }
    //delete
    public function delete($id)
    {
        $delete = Post::find($id);
        unlink($delete->image);
        $delete->delete();
        $notification = array('message'=> 'Delete Post Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
