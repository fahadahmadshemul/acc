<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class HomeController extends Controller
{

    public function add_user()
    {
        return view('Backend.test.add_user');
    }
    public function login()
    {
        return view('Backend.home.login');
    }
    //save_login
    public function save_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $email = $request->email;
        $password = md5(sha1($request->password));

        $check = User::where('email', $email)->where('password', $password)->first();
        if($check)
        {
            if($check->status == 1){
                Session::put('login', true);
                Session::put('role_id', $check->user_type);
                Session::put('id', $check->id);
                Session::put('name', $check->name);
                Session::put('email', $check->email);
                return redirect()->route('dashboard');
            }else{
                Session::put('error', 'Your Account is Inactive Now...!');
                return back();
            }
            
        }else{
            Session::put('error', 'Email Or Password Not Match...!');
            return back();
        }
    }

    //dashboard 
    public function dashboard()
    {
        return view('Backend.home.dashboard');
    }
    //logout
    public function logout()
    {
        $id = Session::get('id');

        Session::put('admin_login', NULL);
        Session::put('user_login', NULL);
        Session::put('id', NULL);
        Session::put('name', NULL);
        Session::put('email', NULL);
        $notification = array('message'=> 'Logout Successfully..!', 'alert-type' => 'info');
        return redirect()->route('login')->with($notification);
    }
}
