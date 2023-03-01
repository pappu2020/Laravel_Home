<?php

namespace App\Http\Controllers;

use App\Models\generalUserCommentModel;
use App\Models\generalUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class generalUserProfileController extends Controller
{
    function profilePage()
    {
        $allCommentPost = generalUserCommentModel::latest()->where("general_user_id", Auth::guard('generaluserLogin')->id())->get();
        return view("General_User.profile", [
            'allCommentPost' => $allCommentPost,
        ]);
    }


    function generalUserProfileEditPage()
    {
        return view("General_User.generalUserProfileEditPage");
    }


    function generalUserInfoUpdate(Request $req)
    {
        if ($req->profileImg == ""  && $req->coverImg == "") {
            generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                'about' => $req->about,
                'address' => $req->address,

            ]);

            return back();
        } elseif ($req->coverImg == "") {


            $upload_img = $req->profileImg;
            if (Auth::guard("generaluserLogin")->user()->photo == null) {
                $extension = $upload_img->getClientOriginalExtension();
                $fileName = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension;



                Image::make($upload_img)->save(public_path('uploads/genUserProfile/' . $fileName));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'photo' => $fileName,

                ]);

                return back();
            } else {
                $delete_pic = public_path('uploads/genUserProfile/' . Auth::guard("generaluserLogin")->user()->photo);
                unlink($delete_pic);

                $extension = $upload_img->getClientOriginalExtension();
                $fileName = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension;



                Image::make($upload_img)->save(public_path('uploads/genUserProfile/' . $fileName));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'photo' => $fileName,

                ]);

                return back();
            }
        } elseif ($req->profileImg == "") {


            $upload_img = $req->coverImg;
            if (Auth::guard("generaluserLogin")->user()->coverphoto == null) {
                $extension = $upload_img->getClientOriginalExtension();
                $fileName = Auth::guard("generaluserLogin")->user()->name . "-" . "cover-photo" . "-" . uniqid() . "." . $extension;



                Image::make($upload_img)->resize(1148, 272)->save(public_path('uploads/genUserProfile/' . $fileName));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'coverphoto' => $fileName,

                ]);

                return back();
            } else {
                $delete_pic = public_path('uploads/genUserProfile/' . Auth::guard("generaluserLogin")->user()->coverphoto);
                unlink($delete_pic);

                $extension = $upload_img->getClientOriginalExtension();
                $fileName = Auth::guard("generaluserLogin")->user()->name . "-" . "cover-photo" . "-" . uniqid() . "." . $extension;



                Image::make($upload_img)->resize(1148, 272)->save(public_path('uploads/genUserProfile/' . $fileName));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'coverphoto' => $fileName,

                ]);

                return back();
            }
        } else {


            if (Auth::guard("generaluserLogin")->user()->photo == null && Auth::guard("generaluserLogin")->user()->coverphoto == null) {


                $upload_img_cover = $req->coverImg;

                $extension_cover = $upload_img_cover->getClientOriginalExtension();
                $fileName_cover = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension_cover;



                Image::make($upload_img_cover)->resize(1148, 272)->save(public_path('uploads/genUserProfile/' . $fileName_cover));



                $upload_img_profile = $req->profileImg;

                $extension_profile = $upload_img_profile->getClientOriginalExtension();
                $fileName_profile = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension_profile;



                Image::make($upload_img_profile)->save(public_path('uploads/genUserProfile/' . $fileName_profile));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'photo' => $fileName_profile,
                    'coverphoto' => $fileName_cover,

                ]);

                return back();
            } else {

                $delete_profile_pic = public_path('uploads/genUserProfile/' . Auth::guard("generaluserLogin")->user()->photo);
                unlink($delete_profile_pic);

                $delete_cover_pic = public_path('uploads/genUserProfile/' . Auth::guard("generaluserLogin")->user()->coverphoto);
                unlink($delete_cover_pic);


                $upload_img_cover = $req->coverImg;

                $extension_cover = $upload_img_cover->getClientOriginalExtension();
                $fileName_cover = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension_cover;



                Image::make($upload_img_cover)->resize(1148, 272)->save(public_path('uploads/genUserProfile/' . $fileName_cover));



                $upload_img_profile = $req->profileImg;

                $extension_profile = $upload_img_profile->getClientOriginalExtension();
                $fileName_profile = Auth::guard("generaluserLogin")->user()->name . "-" . "profile-photo" . "-" . uniqid() . "." . $extension_profile;



                Image::make($upload_img_profile)->save(public_path('uploads/genUserProfile/' . $fileName_profile));


                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([

                    'about' => $req->about,
                    'address' => $req->address,
                    'photo' => $fileName_profile,
                    'coverphoto' => $fileName_cover,

                ]);

                return back();
            }
        }
    }



    function generalUserPassUpdate(Request $req)
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


        if (Hash::check($req->previous_Password, Auth::guard("generaluserLogin")->user()->password)) {


            if ($req->password == $req->password_confirmation) {
                generalUserModel::find(Auth::guard("generaluserLogin")->id())->update([
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
