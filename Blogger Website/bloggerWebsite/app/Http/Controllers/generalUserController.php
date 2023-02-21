<?php

namespace App\Http\Controllers;

use App\Models\generalUserModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class generalUserController extends Controller
{
    function generalUserSignUpPage()
    {
        return view("General_User.generalUserSignUpPage");
    }


    function generalUserSignInPage()
    {
        return view("General_User.generalUserSignInPage");
    }


    function generalUserInsert(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:general_user_models',

            'password' => 'required|confirmed',
            'password' => Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
            'password_confirmation' => 'required',
        ]);

        generalUserModel::insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'created_at' => Carbon::now(),
        ]);

        if (Auth::guard("generaluserLogin")->attempt(['email' => $req->email, 'password' => $req->password])) {


            return redirect()->route("homePage")->with('generalUserLoginsuccess', "Login Success!!");
        }



        // return redirect()->route("generalUserSignInPage")->with('insertSuccess', "You Created Your Account Successfully!!");
    }


    function generalUserLogin(Request $req)
    {

        $req->validate([

            'generalUseremail' => 'required',

            'generalUserpassword' => 'required',

        ]);

        if (Auth::guard("generaluserLogin")->attempt(['email' => $req->generalUseremail, 'password' => $req->generalUserpassword])) {


            return redirect()->route("homePage")->with('generalUserLoginsuccess', "Login Success!!");
        }

        else{
            return redirect()->route("generalUserSignInPage")->with('generalUserLoginFailed', "The email address or password you entered isn't connected to an account.");
        }
    }

    function generalUserLogout()
    {
        Auth::guard("generaluserLogin")->logout();
        return redirect()->route("homePage");
    }



    function generalUserList(){
        $allUserList = generalUserModel::all();
        return view("admin.user.generalUserList",[
            'allUserList' => $allUserList,
        ]);
    }
}
