<?php

namespace App\Http\Controllers;

use App\Models\generalUserModel;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class googleController extends Controller
{
    function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function googlecallback()
    {
        $user = Socialite::driver('google')->user();

        if (generalUserModel::where("email", $user->getEmail())->exists()) {

            if (Auth::guard("generaluserLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('generalUserLoginsuccess', "Login Success!!");
            }
        } else {

            generalUserModel::insert([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt("dfdfdfdfdf"),
                'created_at' => Carbon::now(),
            ]);

            if (Auth::guard("generaluserLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('generalUserLoginsuccess', "Login Success!!");
            }
        }
    }
}
