<?php

namespace App\Http\Controllers;

use App\Models\generalUserModel;
use App\Models\generalUserPassResetModel;
use App\Notifications\generalUserPassResNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class generalUserPassResetController extends Controller
{
    function genUserpasswordResetReqPage(){
        return view("General_User.password_reset.passwordResetReqPage");
    }

    function generalUserPasswordResetSend(Request $req){

       

        if (generalUserModel::where("email", $req->generalUseremail)->exists()) {

            $userInfo = generalUserModel::where("email", $req->generalUseremail)->firstOrFail();
            generalUserPassResetModel::where("userId", $userInfo->id)->delete();

            $passResetData = generalUserPassResetModel::create([
                'userId' => $userInfo->id,
                'token' => uniqid(),
                'created_at' => Carbon::now(),
            ]);

            Notification::send($userInfo, new generalUserPassResNotification($passResetData));


            return back()->with("passresetReq", "We have sent a password reset link to your email.Please, Check your Mail");
           
        }


        else{
            return back()->with("passresetReq", "Account not opened by this email. Please, Enter your account opened email.");
        }

       



    }




    function genUserPassChangeForm($tokenId)
    {
        if(generalUserPassResetModel::where("token", $tokenId)->exists()){
            return view("General_User.password_reset.genUserPassChangePage", [
                'tokenInfo' => $tokenId,
            ]);
        }

        else{
            abort('404');
        }
        
    }


    function genUserPassChange(Request $req)
    {
        $req->validate([

            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password' => 'required|confirmed',

            'password_confirmation' => 'required',

        ]);

        $userInfo = generalUserPassResetModel::where("token", $req->tokenInfoId)->firstOrFail();


        generalUserModel::find($userInfo->userId)->update([
            "password" => Hash::make($req->password),
        ]);
        $userInfo->delete();

        return redirect()->route("generalUserSignUpPage")->with('New_pass_update_success', 'Password Changed!!');
    }
}
