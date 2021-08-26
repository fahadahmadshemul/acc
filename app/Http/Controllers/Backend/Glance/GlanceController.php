<?php

namespace App\Http\Controllers\Backend\Glance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlancePage;

class GlanceController extends Controller
{
    //manage_post
    public function manage()
    {
        $collection = GlancePage::orderBy('id', 'asc')->get();
        return view('Backend.glance.manage_page', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.glance.add_page');
    }
    //save
    public function save(Request $request)
    {
        
        $request->validate([
            'page_name' => 'required',
        ]);

        $save = new GlancePage;
        $save->page_name = $request->page_name;
        $save->description = $request->description;
        $save->save();
        
        $notification = array('message'=> 'Add Page Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
        
    }
    //edit
    public function edit($id)
    {
        $edit = GlancePage::find($id);
        return view('Backend.glance.edit_page', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'page_name' => 'required',
        ]);

        $update = GlancePage::find($id);
        $update->page_name = $request->page_name;
        $update->description = $request->description;
        $update->save();
        
        $notification = array('message'=> 'Update Page Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //delete
    public function delete($id)
    {
        $delete = GlancePage::find($id);
        $delete->delete();
        $notification = array('message'=> 'Delete Page Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }
}
