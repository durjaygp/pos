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
            $filename = date('YmdHi').$file->getClientOriginalName();

           // $filename = Str::slug(date('YmdHi') .$file->getClientOriginalName(),'-');

            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        return redirect()->back();
        
    }//End Method
}
