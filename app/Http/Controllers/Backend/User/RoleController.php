<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Privilege;
use Session;
use DB;

class RoleController extends Controller
{
    //index
    public function index()
    {
        $collection = Role::all();
        return view('Backend.user_role.manage_user_role', compact('collection'));
    }
    //add
    public function add()
    {
        return view('Backend.user_role.add_user_role');
    }
    //save 
    public function save(Request $request)
    {
        $request->validate([
            'roll_name' => 'required'
        ]);
        $id = DB::table('roles')->insertGetId([
                'roll_name' => $request->roll_name,
            ]);

        for ($i=1; $i <= 13 ; $i++) { 
            DB::table('privileges')->insert([
                'role_id' => $id,
                'operation_id' => $i
            ]);
        }
        $notification = array('message'=> 'Add User Successfully Please Set Role To User..!', 'alert-type' => 'success');
        return redirect()->route('manage-user-role')->with($notification);
        //return redirect()->route('add-privilege-to-role', compact('id'))->with($notification,);
    }

    //edit
    public function edit($id)
    {
        $edit = Role::find($id);
        return view('dashboard.user_role.edit_user_role', compact('edit'));
    }
    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'roll_name' => 'required'
        ]);
        $update = Role::find($id);
        $update->roll_name = $request->roll_name;
        $update->save();
        $notification = array('message'=> 'Update Role Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }

    //delete
    public function delete($id)
    {
        $delete = Role::find($id);
        $delete->delete();
        $notification = array('message'=> 'Delete Role Successfully..!', 'alert-type' => 'error');
        return back()->with($notification);
    }

    //add_privilege
    public function add_privilege($id)
    {
        $id = $id;
        $role_name = Role::find($id);
        $collection = Privilege::where('role_id', $id)->get();
        return view('Backend.user_role.add_privilege', compact('collection', 'id', 'role_name'));
    }
    //save_privilege
    public function save_privilege(Request $request, $id)
    {
        if($request->has('is_vissible')){
            $is_vissible = 1;
        }else{
            $is_vissible = 0;
        }
        if($request->has('is_view')){
            $is_view = 1;
        }else{
            $is_view = 0;
        }if($request->has('is_add')){
            $is_add = 1;
        }else{
            $is_add = 0;
        }if($request->has('is_edit')){
            $is_edit = 1;
        }else{
            $is_edit = 0;
        }if($request->has('is_delete')){
            $is_delete = 1;
        }else{
            $is_delete = 0;
        }
        $update = Privilege::where('role_id', $id)->where('operation_id', $request->operation_id)->first();
        $update->is_vissible = $is_vissible;
        $update->is_view = $is_view;
        $update->is_add = $is_add;
        $update->is_edit = $is_edit;
        $update->is_delete = $is_delete;
        $update->save();
        $role = Role::find($id);
        $role_name = $role->roll_name;
        $notification = array('message'=> 'Set Permission Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
}
