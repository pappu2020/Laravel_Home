<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userPasswordResetModel;
use App\Notifications\UserPassResNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class userpasswordResetController extends Controller
{
    function UserpasswordResetReqPage()
    {
        return view("admin.user.UserpasswordResetReqPage");
    }

    function UserPasswordResetSend(Request $req)
    {



        if (User::where("email", $req->useremail)->exists()) {

            $userInfo = User::where("email", $req->useremail)->firstOrFail();
            userPasswordResetModel::where("userId", $userInfo->id)->delete();

            $passResetData = userPasswordResetModel::create([
                'userId' => $userInfo->id,
                'token' => uniqid(),
                'created_at' => Carbon::now(),
            ]);

            Notification::send($userInfo, new UserPassResNotification($passResetData));


            return back()->with("passresetReq", "We have sent a password reset link to your email.Please, Check your Mail");
        } else {
            return back()->with("passresetReq", "Account not opened by this email. Please, Enter your account opened email.");
        }
    }


    function UserPassChangeForm($tokenId)
    {
        if (userPasswordResetModel::where("token", $tokenId)->exists()) {
            return view("admin.user.UserPassChangePage", [
                'tokenInfo' => $tokenId,
            ]);
        } else {
            abort('404');
        }
    }


    function UserPassChange(Request $req)
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

        $userInfo = userPasswordResetModel::where("token", $req->tokenInfoId)->firstOrFail();


        User::find($userInfo->userId)->update([
            "password" => Hash::make($req->password),
        ]);
        $userInfo->delete();

        return redirect()->route("login")->with('New_pass_update_success', 'Password Changed!!');
    }

}
