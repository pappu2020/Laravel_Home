<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;


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




    function UserPassUpdate(Request $req)
    {
        $req->validate([



            'previous_Password' => 'required',


            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password' => 'required|confirmed',

            'password_confirmation' => 'required',


        ]);


        if (Hash::check($req->previous_Password, Auth::user()->password)) {


            if ($req->password == $req->password_confirmation) {
                User::find(Auth::id())->update([
                    "password" => bcrypt($req->password),
                ]);
                return back()->with('pass_update_success', 'Password Update success!!');
            } else {
                return back()->with('pass_not_matched', 'Password did not matched!!');
            }
        } else {
            return back()->with('pass_not_matched', 'Password does not matched with your previous password');
        }
    }


}
