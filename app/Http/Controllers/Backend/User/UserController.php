<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Session;

class UserController extends Controller
{
    //add_user
    public function add_user()
    {
        $roles = Role::all();
        return view('Backend.user.add_user', compact('roles'));
    }
    //save_user
    public function save_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = md5(sha1($request->password));
        $save->user_type = $request->user_type;
        $photo = $request->file('photo');
        if($photo)
        {
            $image_name = md5(rand(100,1000));
            $ext = strtolower($photo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/profile/';
            $image_url = $upload_path.$image_full_name;
            $photo->move($upload_path, $image_full_name);
            $save->photo = $image_url;
            $save->save();
            $notification = array('message'=> 'Add User Successfully..!', 'alert-type' => 'success');
            return back()->with($notification);
        }
        $save->save();
        $notification = array('message'=> 'Add User Successfully..!', 'alert-type' => 'success');
        return back()->with($notification);
    }
    //manage_user
    public function manage_user()
    {
        $collection = User::all();
        return view('Backend.user.manage_user', compact('collection'));
    }
    //edit_user
    public function edit_user($id)
    {
        $roles = Role::all();
        $edit = User::find($id);
        return view('Backend.user.edit_user', compact('edit', 'roles'));
    }
    //update_user
    public function update_user(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'user_type' => 'required',
        ]);

        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->user_type = $request->user_type;
        $photo = $request->file('photo');
        if($photo)
        {
            $image_name = md5(rand(100,1000));
            $ext = strtolower($photo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/profile/';
            $image_url = $upload_path.$image_full_name;
            $photo->move($upload_path, $image_full_name);
            $update->photo = $image_url;
            $update->save();
            $notification = array('message'=> 'Update User Successfully..!', 'alert-type' => 'info');
            return back()->with($notification);
        }
        $update->save();
        $notification = array('message'=> 'Update User Successfully..!', 'alert-type' => 'info');
        return redirect()->route('manage-user')->with($notification);
    }

    //inactive_user
    public function inactive_user($id)
    {
        $update = User::find($id);
        $update->status = 0;
        $update->save();
        $notification = array('message'=> 'Inactive User Successfully..!', 'alert-type' => 'warning');
        return redirect()->route('manage-user')->with($notification);
    }
    //active_user
    public function active_user($id)
    {
        $update = User::find($id);
        $update->status = 1;
        $update->save();
        $notification = array('message'=> 'Active User Successfully..!', 'alert-type' => 'info');
        return redirect()->route('manage-user')->with($notification);
    }
    //delete_user
    public function delete_user($id)
    {
        $update = User::find($id);
        $update->delete();
        $notification = array('message'=> 'Delete User Successfully..!', 'alert-type' => 'error');
        return redirect()->route('manage-user')->with($notification);
    }
    
//change_password
    public function change_password()
    {
        return view('Backend.user.change_password');
    }
    //update password
    public function update_password(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $id = Session::get('id');
        $update = User::find($id);
        $update->password = md5(sha1($request->password));
        $update->save();
        $notification = array('message'=> 'Change Password Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //profile
    public function profile(){
        $id = Session::get('id');
        $user = User::find($id);
        return view('Backend.user.profile', compact('user'));
    }
    //update_profile
    public function update_profile(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $id = Session::get('id');
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $photo = $request->file('photo');
        if($photo)
        {
            $image_name = md5(rand(100,1000));
            $ext = strtolower($photo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/profile/';
            $image_url = $upload_path.$image_full_name;
            $photo->move($upload_path, $image_full_name);
            $update->photo = $image_url;
            $update->save();
            $notification = array('message'=> 'Update Profile Successfully..!', 'alert-type' => 'info');
            return back()->with($notification);
        }
        $update->save();
        $notification = array('message'=> 'Update Profile Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
}
