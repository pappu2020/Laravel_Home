<?php

namespace App\Http\Controllers;

use App\Models\generalUserModel;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class githubController extends Controller
{
    function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    function githubcallback()
    {
        $users = Socialite::driver('github')->user();

        if (generalUserModel::where("email", $users->getEmail())->exists()) {

            if (Auth::guard("generaluserLogin")->attempt(['email' => $users->getEmail(), 'password' => '123@abc'])) {

                return redirect('/')->with('generalUserLoginsuccess', "Login Success!!");
            }
        } else {

            generalUserModel::insert([
                'name' => $users->getName(),
                'email' => $users->getEmail(),
                'password' => bcrypt("123@abc"),
                'created_at' => Carbon::now(),
            ]);

            if (Auth::guard("generaluserLogin")->attempt(['email' => $users->getEmail(), 'password' => '123@abc'])) {

                return redirect('/')->with('generalUserLoginsuccess', "Login Success!!");
            }
        }
    }
}
