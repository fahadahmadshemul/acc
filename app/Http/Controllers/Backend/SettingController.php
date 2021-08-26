<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;

class SettingController extends Controller
{
    //index
    public function index()
    {
        $setting = Setting::find(1);
        return view('Backend.home.setting', compact('setting'));
    }

    //update
    public function update(Request $request)
    {
        $update = Setting::find(1);
        $update->copyright_text = $request->copyright_text;
        $logo  = $request->file('logo');
        if($logo)
        {
            $unlink = $update->logo;
            if($unlink != NULL){
                unlink($unlink);
            }
            $image_name = md5(rand(100,1000));
            $ext = strtolower($logo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/image/';
            $image_url = $upload_path.$image_full_name;
            $logo->move($upload_path, $image_full_name);
            $update->logo = $image_url;
            $update->save();
        }
        $update->save();
        $notification = array('message'=> 'Update Settings Successfully..!', 'alert-type' => 'info');
        return back()->with($notification);
    }
    //darkMode
    public function darkMode($status)
    {
        $result = DB::table('dark_mode')
                ->where('id', 1)
                ->update(['status' => $status]);
        //return response()->json($result);
        return redirect()->route('dashboard');
    }
}
