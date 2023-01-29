<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class userProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function userProfilePage()
    {
        $UserInfo = User::where("email", Auth::user()->email)->get();
        return view("admin.user.users profile.userProfilePage", [
            'UserInfo' => $UserInfo,

        ]);
    }


    function userProfileUpdate(Request $req)
    {
        $getImg = $req->photo;

        if ($getImg == "") {
            User::find($req->userId)->update([
                'name' => $req->name,
                'email' => $req->email,
                'created_at' => Carbon::now(),
            ]);

            return back();
        } else {


            if (Auth::User()->photo == null) {


                $extension = $getImg->getClientOriginalExtension();
                $filename = $req->userId . "-" . rand() . "." . $extension;

                Image::make($getImg)->save(public_path("uploads/userProfile/" . $filename));


                User::find($req->userId)->update([
                    'name' => $req->name,
                    'email' => $req->email,
                    'photo' =>  $filename,
                    'created_at' => Carbon::now(),
                ]);

                return back()->with("userProfileUpdate", "Update Success!!");
            } else {

                $delete_pic = public_path('uploads/userProfile/' . Auth::user()->photo);
                unlink($delete_pic);


                $extension = $getImg->getClientOriginalExtension();
                $filename = $req->userId . "-" . rand() . "." . $extension;

                Image::make($getImg)->save(public_path("uploads/userProfile/" . $filename));


                User::find($req->userId)->update([
                    'name' => $req->name,
                    'email' => $req->email,
                    'photo' =>  $filename,
                    'created_at' => Carbon::now(),
                ]);

                return back()->with("userProfileUpdate", "Update Success!!");
            }
        }
    }
}
