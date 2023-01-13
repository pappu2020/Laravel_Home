<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerLoginModel;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;



class googleLoginController extends Controller
{
    function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function googlecallback()
    {
        $user = Socialite::driver('google')->user();

        if (customerLoginModel::where("email", $user->getEmail())->exists()) {

            if (Auth::guard("customerLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }
        } else {

            customerLoginModel::insert([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt("dfdfdfdfdf"),
                'created_at' => Carbon::now(),
            ]);

            if (Auth::guard("customerLogin")->attempt(['email' => $user->getEmail(), 'password' => "dfdfdfdfdf"])) {

                return redirect('/')->with('customerLoginsuccess', "Login Success!!");
            }
        }
    }
}
