<?php

namespace App\Http\Controllers\Backend\Explore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Explore;

class ExploreController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = Explore::orderBy('id', 'asc')->get();
        return view('Backend.explore.manage_explore', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.explore.add_explore');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $save = new Explore;
        $save->title = $request->title;
        $save->url = $request->url;
        $save->save();
        
        $notification = array('message'=> 'Add Explore Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
        
    }
    //edit
    public function edit($id)
    {
        $edit = Explore::find($id);
        return view('Backend.explore.edit_explore', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

        $update = Explore::find($id);
        $update->title = $request->title;
        $update->url = $request->url;
        $update->save();
        
        $notification = array('message'=> 'Update Explore Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = Explore::find($id);
        $delete->delete();
        $notification = array('message'=> 'Delete Explore Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
