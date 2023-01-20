<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class adminController extends Controller
{
    function profilePage(){
        return view("admin.profilePage");
    }


    function profileImgUpload(Request $req){
        $req->validate([
            'profileImg' => 'required|file|max:5000',
            'profileImg' => 'mimes:jpg,jpeg,png,gif',
        ]);


        if(Auth::user()-> image== null){
            $profile_img = $req ->profileImg; 
            $extension = $profile_img -> getClientOriginalExtension();
            $fileName = Auth::user()->name.'.'. $extension;
            
         

            Image::make($profile_img)->save(public_path('uploads/user/'.$fileName));

            User::find(Auth::id())->update([
                'profileImg'=> $fileName,
            ]);

            return back();
        }

        else{
            $profile_img = $req->profileImg; 
            $delete_pic = public_path('uploads/user/'.Auth::user()->image);
            unlink($delete_pic);

            $extension = $profile_img->getClientOriginalExtension();
            $fileName = Auth::user()->name . '.' . $extension;



            Image::make($profile_img)->save(public_path('uploads/user/' . $fileName));

            User::find(Auth::id())->update([
                'profileImg' => $fileName,
            ]);

            return back();
            
        }
    }
}
