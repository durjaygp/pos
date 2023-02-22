<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Str;

class AdminController extends Controller
{
    public function adminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('frontEnd.profile.profile',compact('adminData'));
    }//End Method

    public function adminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/'.$data->photo));
            $filename = date('YmdHi').'.' . $request->get('photo')->getClientOriginalExtension();
            $nameimage = Str::slug($filename);

           // $filename = Str::slug(date('YmdHi') .$file->getClientOriginalName(),'-');

            $file->move(public_path('upload/admin_image'),$nameimage);
            $data['photo'] = $nameimage;
        }
        $data->save();
        return redirect()->back()->with('success', 'Profile Updated Successfully');
        
    }//End Method
}
