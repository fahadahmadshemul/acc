<?php

namespace App\Http\Controllers\Backend\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = Administration::orderBy('id', 'asc')->get();
        return view('Backend.administration.manage_page', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.administration.add_page');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'page_name' => 'required',
        ]);

        $save = new Administration;
        $save->page_name = $request->page_name;
        $save->description = $request->description;
        $document_image = $request->file('document_image');
        if($document_image){
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($document_image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/document/';
            $image_url = $upload_path.$image_full_name;
            $document_image->move($upload_path, $image_full_name);
            $save->document_image = $image_url;
            $save->document_name = $request->document_name;
            $save->save();
        }
        $save->save();
        
        $notification = array('message'=> 'Add Page Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
        
    }
    //edit
    public function edit($id)
    {
        $edit = Administration::find($id);
        return view('Backend.administration.edit_page', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'page_name' => 'required',
        ]);

        $update = Administration::find($id);
        $update->page_name = $request->page_name;
        $update->description = $request->description;
        $document_image = $request->file('document_image');
        if($document_image){
            if($update->document_image != NULL){
                unlink($update->document_image);
            }
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($document_image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/document/';
            $image_url = $upload_path.$image_full_name;
            $document_image->move($upload_path, $image_full_name);
            $update->document_image = $image_url;
            $update->document_name = $request->document_name;
            $update->save();
        }
        $update->save();
        
        $notification = array('message'=> 'Update Page Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = Administration::find($id);
        if($delete->document_image != NULL)
        {
            unlink($delete->document_image);
        }
        $delete->delete();
        $notification = array('message'=> 'Delete Page Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
